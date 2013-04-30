<?
require_once 'simple_html_dom.php';
$html = file_get_html('http://www.tripadvisor.ru/Search?q='.$_GET['q']);
echo $html->plaintext;
foreach($html->find('img') as $element) { //выборка всех тегов img на странице
       echo $element->src . '<br>'; // построчный вывод содержания всех найденных атрибутов src
}