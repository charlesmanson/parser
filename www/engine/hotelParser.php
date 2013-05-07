<?
require_once 'simple_html_dom.php';
if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'search' :
			$html = file_get_html('http://www.tripadvisor.ru/Search?q=' . urlencode($_GET['req']));
			$results = Array();
			foreach ($html->find('div.searchResult div.srHead a') as $element) {//выборка всех тегов img на странице
				$href = $element -> href;
				$matches = preg_split('/-/', $href);
				$hotelId = $matches[2];
				if (!strcmp($matches[0], '/Hotel_Review')) continue;
				if (strlen($hotelId)>8) continue;
				$locationId = $matches[1];
				if (!isset($results[$hotelId])){
					$results[$hotelId] = Array(
						'shit'		 => $matches[0],
						'locationId' => $locationId,
						'luxaId'	 => $_GET['luxaId'],
						'hotelId'	 => $hotelId,
						'link'		 => '/Hotel_Review-' . $matches[2]
					);
				}
			}
			echo json_encode($results);
			break;
			
		case 's_info':
			$href = 'http://www.tripadvisor.ru/Hotel_Review-' . $_GET['hotelId'];
			$html = file_get_html($href);
			
			$result = Array(
				'luxaId' => $_GET['luxaId'],
				'hotelId' => $_GET['hotelId'],
				'locationId' => $_GET['locationId']				
			);

			$tmp = $html->find('h1#HEADING');
			$result['name'] = trim($tmp[0]->plaintext);
			$tmp = $html->find('div#HEADING_GROUP span.street-address');
			$result['street'] = trim($tmp[0]->plaintext);
			$tmp = $html->find('div#HEADING_GROUP span.locality');
			$result['locality'] = trim($tmp[0]->plaintext);
			$tmp = $html->find('div#HEADING_GROUP span.country-name');
			$result['country'] = trim($tmp[0]->plaintext);
			//$result['href'] = '/engine/hotelParser.php?action=attach&luxaId=&hotelId=&locationId=&name=&street=&locality=';
			echo json_encode($result);
			break;
			
		case 'reviews':
			$href = isset($_GET['href']) ? 'http://www.tripadvisor.ru'.$_GET['href'] : 'http://www.tripadvisor.ru/Hotel_Review-' . $_GET['hotelId'];
			$html = file_get_html($href);
			
			$result = Array();
			
			$tmp = $html->find('a.sprite-pageNext');
			if (count($tmp)) $result['href'] = $tmp[0]->href;
			else $result['href'] = FALSE;
			
			
			
			echo json_encode($result);
			break;

		default :
			break;
	}
}
