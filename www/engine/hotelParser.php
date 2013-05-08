<?
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
			$html = file_get_html('http://www.tripadvisor.ru/Search?q=' . urlencode($_GET['req']));
			$results = Array();
			foreach ($html->find('div.searchResult div.srHead a') as $element) {//выборка всех тегов img на странице
				$href = $element -> href;
				$matches = preg_split('/-/', $href);
				$hotelId = $matches[2];
				if (!isHotel('http://www.tripadvisor.ru/Hotel_Review-' . $matches[2]))
					continue;
				if (strlen($hotelId) != 7)
					continue;
				$locationId = $matches[1];

				if (!isset($results[$hotelId])) {
					$results[$hotelId] = Array('locationId' => $locationId, 'luxaId' => $_GET['luxaId'], 'hotelId' => $hotelId, 'link' => '/Hotel_Review-' . $matches[2]);
				}
			}
			echo json_encode($results);
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
				$result['rating'] = $tmp[0] -> content * 2.0;
				
				$taDb->setHotel($result);
			}
			$result['luxaId'] = $_GET['luxaId'];
			//$result['href'] = '/engine/hotelParser.php?action=attach&luxaId=&hotelId=&locationId=&name=&street=&locality=';
			echo json_encode($result);
			break;

		case 'reviews' :
			$href = isset($_GET['href']) ? 'http://www.tripadvisor.ru' . $_GET['href'] : 'http://www.tripadvisor.ru/Hotel_Review-' . $_GET['hotelId'];
			$html = file_get_html($href);

			$result = Array();

			$tmp = $html -> find('a.sprite-pageNext');
			if (count($tmp))
				$result['href'] = $tmp[0] -> href;
			else
				$result['href'] = FALSE;

			echo json_encode($result);
			break;
			
		case 'assign':
			$hDb = new hotelDb();
			$hDb->assign($_GET['luxaId'], $_GET['hotelId']);
			echo json_encode($_GET);
			break;

		default :
			break;
	}
}
