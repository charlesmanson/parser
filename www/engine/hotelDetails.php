<?
/**
 * Hotel details class
 */
require_once ("simple_html_dom.php");

class hotelDetails {
	
	private $hotelId, $locationId;

	private $page = null;
	private $hName = null;
	private $hAddr = null;
	private $hRating = null;
	private $hReviews = null;

	function __construct($link) {
		$this -> page = file_get_html('http://www.tripadvisor.ru' . $link);
		$tmp = explode('-', $link);
		$this->locationId = $tmp[1];
		$this->hotelId = $tmp[2];
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
			$firstRvw = $reviews[0];
			$tmp = $firstRvw->parent()->id;
			$tmp = explode('_', $tmp);
			$firstId = $tmp[1];
			foreach ($reviews as $review) {
				$tmp = $review->parent();
				$tmp = explode('_',$tmp->id);
				$rvwId = $tmp[1];
				$tmp = $review -> find('div.username');
				$username = $tmp[0] -> plaintext;
				$tmp = $review -> find('div.location');
				$userLoc = $tmp[0] -> plaintext;
				$tmp = $review -> find('div.quote');
				$quote = $tmp[0]->plaintext;
				$tmp = $review -> find('div.rating img.sprite-ratings');
				$rating = $tmp[0] -> content * 2;
				$tmp = $review -> find('div.entry p');
				$entry = $tmp[0];
				$rvw = Array();
				if (!count($entry->find('span.partnerRvw'))){
					$rvw['short'] = $rvw['full'] = $entry->innertext;
				} else {
					$text = rtrim($entry->plaintext);
					$val = explode(' ', $text);
					array_pop($val);
					$text = implode(' ', $val);
					$rvw['short'] = $text;
					$rvw['full'] = $this->getFullReview($rvwId);
				}
				array_push($this -> hReviews, Array(
					'username' => $username, 
					'quote' => $quote, 
					'rating' => $rating, 
					'review' => $rvw
				));
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
	
	private function getFullReview($rvwId){
		$html = file_get_html('http://www.tripadvisor.ru/UxpandedUserReviews-'.$this->locationId.'-'.$this->hotelId.'?target='.$rvwId.'&context=1&reviews='.$rvwId);
		$entry = $html->find('div.entry');
		return $entry[0]->innertext;
	}

}
