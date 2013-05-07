<?
require_once ("engine/simple_html_dom.php");

class hotelFinder {
	private $html = null;

	public function find($request) {
		$this->html = file_get_html('http://www.tripadvisor.ru/Search?q='.urlencode($_GET[q]));
		$result = Array();
		foreach ($this->html->find('div.searchResult div.srHead a') as $element) {
			$href = $element -> href;
			$matches = preg_split('/-/', $href);
			//else echo 'no';//'^\/#[^-]*#-#[^-]*#-#[^-]*#-#[^-]*#-#[^$]#'
			if (!isset($result[$matches[2]])){
				$result[$matches[2]] = Array(
					'hotelId' => $matches[2],
					'locationId' => $matches[1]
				);
			}			
		}
		foreach ($result as $key => $entry) {
			$result[$key] = $this->hotelInfo($entry);
		}
		return $result;
	}
	
	private function hotelInfo($req){
		$href = 'http://www.tripadvisor.ru/Hotel_Review-' . $req['hotelId'];
		$this->html = file_get_html($href);

		$tmp = $html->find('h1#HEADING');
		$req[name] = $tmp[0]->innertext;
		$tmp = $html->find('div#HEADING_GROUP span.street-address');
		$req[street] = $tmp[0]->innertext;
		$tmp = $html->find('div#HEADING_GROUP span.locality');
		$req[locality] = $tmp[0]->innertext;
		$tmp = $html->find('div#HEADING_GROUP span.country-name');
		$req[country] = $tmp[0]->innertext;
		return $req;
	}

}

$hostname = 'localhost';
$username = 'root';
$password = '123123';

$db = mysql_connect($hostname, $username, $password);
mysql_set_charset('utf8');
mysql_select_db('parser');


