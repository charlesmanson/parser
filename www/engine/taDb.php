<?

class taDb{
	private $db;
		
	public function __construct($pageSize = 30){
		$hostname = 'localhost';
		$username = 'root';
		$password = '123123';

		$this -> db = mysql_connect($hostname, $username, $password);
		mysql_set_charset('utf8');
		mysql_select_db('parser');
	}
	
	public function getHotel($hotelId){
		$query = "SELECT `hotel`.`hotelId` as `hotelId`,
						`hotel`.`locationId` as `locationId`,
						`hotel`.`name` as `name`,
						`hotel`.`street` as `street`,
						`location`.`city` as `locality`,
						`location`.`country` as `country`,
						`hotel`.`rating` as `rating` 
				FROM `hotel`, `location` WHERE `hotelId` = '".$hotelId."' 
									AND `hotel`.`locationId` = `location`.`locationId`";
		$result = mysql_query($query);
		echo mysql_error();
		//echo 'sss'.$result;
		//print_r($result);
		if (mysql_num_rows($result) > 0) {
			return mysql_fetch_assoc($result);
		}
		return FALSE;
	}
	
	public function setHotel($hotel){
		$query = "INSERT INTO `hotel` (`hotelId`, `locationId`, `street`, `rating`, `name`)
				VALUES ('".$hotel['hotelId']."', '".$hotel['locationId']."', '".$hotel['street']."', ".$hotel['rating'].", '".$hotel['name']."')";
		mysql_query($query);
		$query = "INSERT IGNORE INTO `location` (`locationId`, `city`, `country`)
				VALUES ('".$hotel['locationId']."', '".$hotel['locality']."', '".$hotel['country']."')";
		mysql_query($query);
		mysql_query("DELETE FROM `taratings` WHERE `hotelId` = '".$hotel['hotelId']."'");
		foreach ($hotel['marks'] as $mark => $count) {
			for ($i=0; $i < $count; $i++) { 
				mysql_query("INSERT INTO `taratings` (`hotelId`, `rating`) VALUES ('".$hotel['hotelId']."', ".$mark.")");
			}
		}
	}
	
	public function addReviews($reviews){
		$query = "INSERT IGNORE INTO `reviews` (`id`, `hotelId`, `author`, `title`, `rating`, `short`, `full`) VALUES ";
		$comma = FALSE;
		foreach ($reviews as $rvw) {
			if ($comma) {
				$query .= ', ';
			}
			$comma = TRUE;
			$query .= "('".$rvw['id']."', '".$rvw['hotelId'].
						"', '".mysql_escape_string($rvw['author']).
						"', '".mysql_escape_string($rvw['title']).
						"', ".$rvw['rating'].
						", '".mysql_escape_string($rvw['short']).
						"', '".mysql_escape_string($rvw['full'])."')";
		}
		mysql_query($query);
	}
}