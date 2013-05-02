<?
require_once('simple_html_dom.php'); 
$href = urldecode($_GET['q']);
$html = file_get_html('http://www.tripadvisor.ru'.$href);
//echo $html->plaintext;
$hotel_name = $html->find('h1#HEADING')[0]->innertext;
$hotel_street = $html->find('div#HEADING_GROUP span.street-address')[0]->innertext;
$hotel_locality = $html->find('div#HEADING_GROUP span.locality')[0]->innertext;
$hotel_country = $html->find('div#HEADING_GROUP span.country-name')[0]->innertext;

?>
<h1><?=$hotel_name;?></h1>
<span><?=$hotel_street.', '.$hotel_locality.', '.$hotel_country;?></span>