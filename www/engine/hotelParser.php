<?
set_time_limit(3600);
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
ini_set('error_reporting', E_ALL);

require_once 'simple_html_dom.php';
require_once 'taDb.php';
require_once 'hotelDb.php';

function get_url($url) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	if (!curl_errno($ch))
		$url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
	curl_close($ch);
	return $url;
}

function isHotel($url) {
	$url = get_url($url);
	$parts = parse_url($url);
	if (!strcmp(substr($parts['path'], 1, 5), 'Hotel'))
		return TRUE;
	else
		return FALSE;
}

function getReviews($hotelId, $page) {
	$hReviews = Array();
	$reviews = $page -> find('div#REVIEWS div.basic_review');
	$firstRvw = $reviews[0];
	$tmp = $firstRvw -> parent() -> id;
	$tmp = explode('_', $tmp);
	$firstId = $tmp[1];
	$idList = Array();
	$i=0;
	foreach ($reviews as $review) {
		//$i++;
		//echo $i.'<br>';
		$tmp = $review -> parent();
		$tmp = explode('_', $tmp -> id);
		$rvwId = $tmp[1];
		array_push($idList, $rvwId);
		$tmp = $review -> find('div.username');
		$username = $tmp[0] -> plaintext;
		$tmp = $review -> find('div.location');
		$userLoc = count($tmp) != 0 ? $tmp[0] -> plaintext : '';
		$tmp = $review -> find('div.quote');
		$title = $tmp[0] -> plaintext;
		$tmp = $review -> find('div.rating img.sprite-ratings');
		$rating = $tmp[0] -> content * 2;
		$tmp = $review -> find('div.entry p');
		$entry = count($tmp) != 0 ? $tmp[0] : NULL;
		$review = '';
		$extend = FALSE;
		if ($entry === NULL) {
			$review = " ";
		} 
		elseif (!count($entry -> find('span.partnerRvw'))) {
			$review = $rvw['full'] = $entry -> innertext;
		} else {
			$text = rtrim($entry -> plaintext);
			$val = explode(' ', $text);
			array_pop($val);
			$text = implode(' ', $val);
			$review = $text;
		}
		$hReviews[$rvwId] = Array('id' => $rvwId, 'hotelId' => $hotelId, 'author' => $username, 'title' => $title, 'rating' => $rating, 'short' => $review);
	}
	$frvw = getFullReview($hotelId, $rvwId, $idList);
	foreach ($hReviews as $key => $review) {
		$hReviews[$key]['full'] = $frvw[$key];
	}
	return $hReviews;
}

function getFullReview($hotelId, $rvwId, $rvwList) {
	$html = file_get_html('http://www.tripadvisor.ru/ExpandedUserReviews-' . $hotelId . '?target=' . $rvwId . '&context=1&reviews=' . implode(',', $rvwList));
	$reviews = Array();
	foreach ($rvwList as $id) {
		$entry = $html -> find('div#expanded_review_' . $id . ' div.entry');
		$reviews[$id] = $entry[0] -> innertext;
	}
	return $reviews;
}

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'search' :
			if ($_GET['assignId']) {
				$taDb = new taDb();

				$hotel = $taDb -> getHotel($_GET['assignId']);
				//print_r($hotel);
				$result = Array('type' => 'html', 'html' => $hotel['name'] . '<br>' . $hotel['locality'] . ', ' . $hotel['street'] . '<a class="hotel-load-reviews" href="#" onclick="loadReviews(\'' . $hotel['hotelId'] . '\');">загрузить отзывы</a>');
				echo json_encode($result);

			} else {
				$html = file_get_html('http://www.tripadvisor.ru/Search?q=' . urlencode($_GET['req']));
				$results = Array();
				foreach ($html->find('div.searchResult div.srHead a') as $element) {//выборка всех тегов img на странице
					$href = $element -> href;
					$matches = preg_split('/-/', $href);
					$hotelId = $matches[2];
					if (!isHotel('http://www.tripadvisor.ru/Hotel_Review-' . $matches[2]))
						continue;
					if (strlen($hotelId) != 7 && strlen($hotelId) != 8){
						continue;
					}
					$locationId = $matches[1];

					if (!isset($results[$hotelId])) {
						$results[$hotelId] = Array('locationId' => $locationId, 'luxaId' => $_GET['luxaId'], 'hotelId' => $hotelId, 'link' => '/Hotel_Review-' . $matches[2]);
					}
				}
				echo json_encode($results);
			}
			break;

		case 's_info' :
			$taDb = new taDb();

			$result = $taDb -> getHotel($_GET['hotelId']);

			if ($result === FALSE) {

				$href = 'http://www.tripadvisor.ru/Hotel_Review-' . $_GET['hotelId'];
				$html = file_get_html($href);

				$result = Array('hotelId' => $_GET['hotelId'], 'locationId' => $_GET['locationId']);

				$tmp = $html -> find('h1#HEADING');
				$result['name'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#HEADING_GROUP span.street-address');
				$result['street'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#HEADING_GROUP span.locality');
				$result['locality'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#HEADING_GROUP span.country-name');
				$result['country'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#ICR2 img.sprite-ratings');
				$result['rating'] = count($tmp) ? $tmp[0] -> content * 2.0 : 0.0;

				$taDb -> setHotel($result);
			}
			$result['luxaId'] = $_GET['luxaId'];
			//$result['href'] = '/engine/hotelParser.php?action=attach&luxaId=&hotelId=&locationId=&name=&street=&locality=';
			echo json_encode($result);
			break;

		case 'loadRvw' :
			$href = isset($_GET['href']) ? 'http://www.tripadvisor.ru' . $_GET['href'] : 'http://www.tripadvisor.ru/Hotel_Review-' . $_GET['hotelId'];
			$html = file_get_html($href);

			$result = Array();
			
			$result['reviews'] = getReviews($_GET['hotelId'], $html);
			
			if (count($result['reviews'])) {
				$taDb = new taDb();
				$taDb->addReviews($result['reviews']);
			}

			$tmp = $html -> find('a.sprite-pageNext');
			$result['hotelId'] = $_GET['hotelId'];
			if (count($tmp))
				$result['href'] = $tmp[0] -> href;
			else
				$result['href'] = FALSE;

			echo json_encode($result);
			break;

		case 'assign' :
			$hDb = new hotelDb();
			$hDb -> assign($_GET['luxaId'], $_GET['hotelId']);
			echo json_encode($_GET);
			break;

		default :
			break;
	}
}
