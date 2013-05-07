<?
set_time_limit(3600);
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
ini_set('error_reporting', E_ALL);

require_once ("engine/simple_html_dom.php");

class hotelFinder {
	private $html = null;

	public function find($request) {
		echo '<br>'.'http://www.tripadvisor.ru/Search?q='.urlencode($request['name']).'<br>';
		$this->html = file_get_html('http://www.tripadvisor.ru/Search?q='.urlencode($request['name']));
		$result = Array();
		if (!$this->html) return $result;
		foreach ($this->html->find('div.searchResult div.srHead a') as $element) {
			$href = $element -> href;
			$matches = preg_split('/-/', $href);
			//else echo 'no';//'^\/#[^-]*#-#[^-]*#-#[^-]*#-#[^-]*#-#[^$]#'
			if (!isset($result[$matches[2]])){
				$result[$matches[2]] = Array(
					'luxaId' => $request['luxaId'],
					'hotelId' => $matches[2],
					'locationId' => $matches[1]
				);
			}			
		}
		//print_r($result);
		foreach ($result as $key => $entry) {
			//print_r($entry);
			$result[$key] = $this->hotelInfo($entry);
		}
		
		return $result;
	}
	
	private function hotelInfo($req){
		$href = 'http://www.tripadvisor.ru/Hotel_Review-' . $req['hotelId'];
		$this->html = file_get_html($href);
		$tmp = $this->html->find('h1#HEADING');
		$req['name'] = $tmp[0]->innertext;
		$tmp = $this->html->find('div#HEADING_GROUP span.street-address');
		$req['street'] = $tmp[0]->innertext;
		$tmp = $this->html->find('div#HEADING_GROUP span.locality');
		$req['locality'] = $tmp[0]->innertext;
		$tmp = $this->html->find('div#HEADING_GROUP span.country-name');
		$req['country'] = $tmp[0]->innertext;
		return $req;
	}

}

$hostname = 'localhost';
$username = 'root';
$password = '123123';

$db = mysql_connect($hostname, $username, $password);
mysql_set_charset('utf8');
mysql_select_db('parser');

$query = "SELECT  `hotelId` AS  `luxaId` , CONCAT(  `city`,  ' ',  `hotel`) AS  `name` 
FROM  `luxahotel`"; 
$result = mysql_query($query);
$finder = new hotelFinder();

$i = 0;
if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
    	$i++;
		echo $i.') '.$row['name'].'<br>';
    	$hotels = $finder->find($row);
    	echo 'Haйдено: '.count($hotels).'<br>';
    	print_r($hotels);
		echo '<br>';
        //echo "<a href='results.php?q=".$row['name']."'>{$row['name']}</a> <br>";
    }
}