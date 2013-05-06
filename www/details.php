<?
require_once('simple_html_dom.php');
require_once('engine/hotelDetails.php'); 
$href = urldecode($_GET['q']);
$html = file_get_html('http://www.tripadvisor.ru'.$href);

$hotel = new hotelDetails($href);

//echo $html->plaintext;
$hotel_name = $hotel->hotelName();
$hotel_address = $hotel->hotelAddress();
$hotel_rating = $hotel->hotelRating();
$reviews = $hotel->hotelReviews();
/*$reviews = $html->find('div#REVIEWS div.basic_review');
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
}//*/
?>
<h1><?=$hotel_name;?></h1>
<span><?=$hotel_address['street'].', '.$hotel_address['city'].', '.$hotel_address['country'];?></span>
<span>Рейтинг: <?=$hotel_rating;?></span>
<?foreach($reviews as $review):?>
<hr><h2><?=$review['quote'];?></h2>
<span>Рейтинг: <?=$review['rating'];?></span>
<p><?=$review['review']['short'];?></p>
<p><?=$review['review']['full'];?></p>
<?endforeach?>
