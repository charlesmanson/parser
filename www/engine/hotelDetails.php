<?
/**
 * Hotel details class
 */
require_once ("simple_html_dom.php");

class hotelDetails {

	private $page = null;
	private $hName = null;
	private $hAddr = null;
	private $hRating = null;
	private $hReviews = null;

	function __construct($link) {
		$this -> page = file_get_html('http://www.tripadvisor.ru' . $link);
	}

	public function hotelName() {
		if (!$this -> hName) {
			$this -> hName = $this -> getString('h1#HEADING');
		}
		return $this -> hName;
	}

	public function hotelAddress() {
		if (!$this -> hAddr) {
			$this -> hAddr = Array('country' => $this -> getString('div#HEADING_GROUP span.country-name'), 'city' => $this -> getString('div#HEADING_GROUP span.locality'), 'street' => $this -> getString('div#HEADING_GROUP span.street-address'));
		}
		return $this -> hAddr;
	}

	public function hotelRating() {
		if (!$this -> hRating) {
			// Удвоение рейтинга - наколбасить нужно.
			$this -> hRating = $this -> getString('div#ICR2 img.sprite-ratings', 'content') * 2.0;
		}
		return $this -> hRating;
	}

	public function hotelReviews() {
		if (!$this -> hReviews) {
			$this->hReviews = Array();
			$reviews = $this->page -> find('div#REVIEWS div.basic_review');
			foreach ($reviews as $review) {
				$tmp = $review -> find('div.rating img.sprite-ratings');
				$rating = $tmp[0] -> content * 2;
				$tmp = $review -> find('div.entry p');
				$entry = $tmp[0];
				$rvw = Array();
				if (!count($entry->find('span.partnerRvw'))){
					$rvw['short'] = $rvw['full'] = $entry->innertext;
				} else {
					$text = rtrim($review->plaintext);
					$val = explode(' ', $text);
					array_pop($val);
					$text = implode(' ', $val);
					$rvw['short'] = $text;
				}
				array_push($this -> hReviews, Array('rating' => $rating, 'review' => $rvw));
			}
		}
		return $this -> hReviews;
	}

	private function getString($selector, $type = 'plaintext') {
		if (!$this -> page)
			return null;
		$object = $this -> page;
		$result = $object -> find($selector);
		return $result[0] -> $type;
	}

}
