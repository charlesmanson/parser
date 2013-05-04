<?
require_once('simple_html_dom.php'); 
$href = urldecode($_GET['q']);
$html = file_get_html('http://www.tripadvisor.ru'.$href);
//echo $html->plaintext;
$hotel_name = $html->find('h1#HEADING')[0]->plaintext;
$hotel_street = $html->find('div#HEADING_GROUP span.street-address')[0]->plaintext;
$hotel_locality = $html->find('div#HEADING_GROUP span.locality')[0]->plaintext;
$hotel_country = $html->find('div#HEADING_GROUP span.country-name')[0]->plaintext;
$hotel_rating = $html->find('div#ICR2 img.sprite-ratings')[0]->content;
$reviews = $html->find('div#REVIEWS div.basic_review');
foreach ($reviews as $review) {
	$entry = $review->find('div.entry p')[0];
	$rating = $review->find('div.rating img.sprite-ratings')[0]->content;
	echo '<span>Рейтинг: '.$rating.'</span>';
	if (!count($entry->find('span.partnerRvw'))) {
		echo '<p>'.$entry->innertext.'</p>';
	} else {
		$text = rtrim($entry->plaintext);
		$val = explode(' ', $text);
		array_pop($val);
		$text = implode(' ', $val);
		//echo '<p>'.substr($text, 0, strlen($text) - 40).'</p>';
		echo '<p>'.$text.'</p>';
	}
}
?>
<h1><?=$hotel_name;?></h1>
<span><?=$hotel_street.', '.$hotel_locality.', '.$hotel_country;?></span>
<span>Рейтинг: <?=$hotel_rating;?></span>