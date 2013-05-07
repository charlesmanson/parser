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
				$locationId = $matches[1];
				if (!isset($results[$hotelId])){
					$results[$hotelId] = Array(
						'locationId' => $locationId,
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
				hotelId => $_GET['hotelId'],
				locationId => $_GET['locationId']				
			);

			$tmp = $html->find('h1#HEADING');
			$result[name] = $tmp[0]->innertext;
			$tmp = $html->find('div#HEADING_GROUP span.street-address');
			$result[street] = $tmp[0]->innertext;
			$tmp = $html->find('div#HEADING_GROUP span.locality');
			$result[locality] = $tmp[0]->innertext;
			$tmp = $html->find('div#HEADING_GROUP span.country-name');
			$result[country] = $tmp[0]->innertext;
			echo json_encode($result);
			break;
			
		case 'reviews':
			$href = isset($_GET['href']) ? 'http://www.tripadvisor.ru'.$_GET['href'] : 'http://www.tripadvisor.ru/Hotel_Review-' . $_GET['hotelId'];
			$html = file_get_html($href);
			
			$result = Array();
			
			$tmp = $html->find('a.sprite-pageNext');
			if (count($tmp)) $result[href] = $tmp[0]->href;
			else $result[href] = FALSE;
			
			
			
			echo json_encode($result);
			break;

		default :
			break;
	}
}
