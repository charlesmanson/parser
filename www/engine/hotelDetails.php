<?
/**
 * Hotel details class
 */
 require_once("simple_html_dom.php");
 
class hotelDetails {
	
	private $page = null;
	private $hName = null;
	private $hAddr = null;
	private $hRating = null;
	
	
	function __construct($link) {
		$this->page = file_get_html('http://www.tripadvisor.ru'.$link);
	}
	
	public function hotelName()	{
		if (!$this->hName) {
			$this->hName = $this->getString('h1#HEADING');
		}
		return $this->hName;
	}
	
	public function hotelAddress() {
		if (!$this->hAddr) {
			$this->hAddr = Array(
				'country' => $this->getString('div#HEADING_GROUP span.country-name'),
				'city' => $this->getString('div#HEADING_GROUP span.locality'),
				'street' => $this->getString('div#HEADING_GROUP span.street-address')
			);
		}
		return $this->hAddr;
	}
	
	public function hotelRating() {
		if (!$this->hRating) {
			$this->hRating = $this->getString('div#ICR2 img.sprite-ratings', 'content');
		}
		return $this->hRating;
	}
	
	private function getString($selector, $type = 'plaintext'){
		if (!$this->page) return null;
		$object = $this->page;
		$result = $object->find($selector);
		return $result[0]->$type;
	}
}
