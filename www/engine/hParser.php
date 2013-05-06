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
			break;

		default :
			break;
	}
}
