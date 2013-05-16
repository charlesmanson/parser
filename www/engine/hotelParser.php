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

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'search' :
			$hDb = new hotelDb();
			$assignedID = $hDb->getAssignedID($_GET['luxaID']);
			if ($assignedID) {
				
				$taDb = new taDb();			

				$hotel = $taDb -> getHotel($_GET['assignID']);
				//print_r($hotel);
				$result = Array('type' => 'html', 'html' => $hotel['name'] . '<br>' . $hotel['locality'] . ', ' . $hotel['street'] . '<a class="hotel-load-reviews" href="#" onclick="loadReviews(\'' . $hotel['hotelID'] . '\');">загрузить отзывы</a>');
				echo json_encode($result);

			} else {
				$html = file_get_html('http://www.tripadvisor.ru/Search?q=' . urlencode($_GET['req']));
				$results = Array();
				foreach ($html->find('div.searchResult div.srHead a') as $element) {
					
					$href = $element -> href;
					$matches = preg_split('/-/', $href);
					$hotelID = $matches[2];
					if (!isHotel('http://www.tripadvisor.ru/Hotel_Review-' . $matches[2]))						
						continue;
					if (strlen($hotelID) != 7 && strlen($hotelID) != 8){
						continue;
					}
					$locationID = $matches[1];

					if (!isset($results[$hotelID])) {
						$results[$hotelID] = Array('locationID' => $locationID, 'luxaID' => $_GET['luxaID'], 'hotelID' => $hotelID, 'link' => '/Hotel_Review-' . $matches[2]);
					}
				}
				echo json_encode($results);
			}
			break;

		case 's_info' :
			$hDb = new hotelDb();

			$result = $hDb -> getTAHotel($_GET['hotelID']);

			if ($result === FALSE) {

				$href = 'http://www.tripadvisor.ru/Hotel_Review-' . $_GET['hotelID'];
				$html = file_get_html($href);

				$result = Array('hotelID' => $_GET['hotelID'], 'locationID' => $_GET['locationID']);

				$tmp = $html -> find('h1#HEADING');
				$result['name'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#HEADING_GROUP span.street-address');
				$result['street'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#HEADING_GROUP span.locality');
				$result['city'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#HEADING_GROUP span.country-name');
				$result['country'] = trim($tmp[0] -> plaintext);
				$tmp = $html -> find('div#ICR2 img.sprite-ratings');
				$result['rating'] = count($tmp) ? $tmp[0] -> content * 2.0 : NULL;
				$result['marks'] = Array();
				if ($result['rating'] !== NULL) {
					$grade = Array(
						'Отлично' => 10,
						'Excellent' => 10,
						'Очень хорошо' => 8,
						'Very good' => 8,
						'Неплохо' => 6,
						'Average' => 6,
						'Плохо' => 4,
						'Poor' => 4,
						'Ужасно' => 2,
						'Terrible' => 2
					);
					$marks = $html -> find('form#REVIEW_FILTER_FORM div.col2of2 div.wrap');
					
					foreach ($marks as $mark) {
						$tmp = $mark->find('span.text');
						$value = $grade[trim($tmp[0]->plaintext)];
						$tmp = $mark->find('span.compositeCount');
						$count = trim($tmp[0]->plaintext);
						$result['marks'][$value] = (int)$count;						
					}
				}

				$hDb -> setTAHotel($result);
			}
			$result['luxaID'] = $_GET['luxaID'];
			
			echo json_encode($result);
			break;
			
		case 'assign' :
			$hDb = new hotelDb();
			$hDb -> assign($_GET['luxaID'], $_GET['hotelID']);
			echo json_encode($_GET);
			break;

		default :
			break;
	}
}
