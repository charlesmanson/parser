<?
require_once 'simple_html_dom.php';
$html = file_get_html('http://www.tripadvisor.ru/Search?q='.urlencode($_GET[q]));
foreach($html->find('div.pagination') as $element){
	echo $element->plaintext . '<br>';
}
echo '<hr>';
foreach($html->find('div.searchResult div.srHead a') as $element) { //выборка всех тегов img на странице
       $href = $element->href;
		$matches = preg_split('/-/', $href);
		//else echo 'no';//'^\/#[^-]*#-#[^-]*#-#[^-]*#-#[^-]*#-#[^$]#'
		$href = '/Hotel_Review-'.$matches[1].'-'.$matches[2].'-Reviews-'.$matches[4].'-'.$matches[5];
		print_r($matches);
       echo $href . '<br>ddd<br>';
}
/*
g298507-d2210614-Reviews-Apple_Hostel-St_Petersburg_Northwestern_District.html
g298507-d2210614-r146471689-Apple_Hostel-St_Petersburg_Northwestern_District.html
 * 
 */