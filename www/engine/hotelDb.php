<?

class hotelDb{
	private $db;
	private $pageSize;
	
	public function __construct($pageSize = 30){
		$this->pageSize = $pageSize;
		$hostname = 'localhost';
		$username = 'root';
		$password = '123123';

		$this -> db = mysql_connect($hostname, $username, $password);
		mysql_set_charset('utf8');
		mysql_select_db('luxa');
	}
	
	public function getLuxaList($page){
		$query = "SELECT  `hotel`.`hotelID` AS  `luxaID` , CONCAT(  `city`.`name`,  ' ',  `hotel`.`name`) AS  `name`, `hotel`.`address`  
		FROM  `hotel`, `city` WHERE `hotel`.`hotelID`=279 AND `hotel`.`cityID` = `city`.`cityID` LIMIT ".$page*$this->pageSize.",".$this->pageSize;
		$result = mysql_query($query);
		$list = Array();
		if (mysql_num_rows($result) > 0) {
			while ($row = mysql_fetch_assoc($result)) {
				$list[$row['luxaID']] = $row;
			}
		}
		return $list;
	}
	
	public function numPages(){
		$result = mysql_query("SELECT `hotelID` FROM `hotel`");
		return ceil(mysql_num_rows($result) / $this->pageSize);
	}
	
	public function assign($luxaID, $taID){
		/*$result = mysql_query("SELECT `systemID` FROM `hotel` WHERE `hotelID`=".$luxaID);
		$systemID = mysql_fetch_assoc($result);
		$systemID = $systemID['systemID'];*/
		$query = "UPDATE `tahotel` SET `luxaID`=".$luxaID." WHERE `hotelID`='".$taID."'";
		//echo $query;
		$result = mysql_query($query);
	}
	
	public function getAssignedID($luxaID){
		$result = mysql_query("SELECT `hotelID` FROM `tahotel` WHERE `luxaID`=".$luxaID);
		if (mysql_num_rows($result) == 0) return NULL;
		else {
			$arr = mysql_fetch_row($result);
			return $arr['hotelID'];
		}//*/
		//return !mysql_num_rows($result) ? NULL : mysql_fetch_field($result);
	}
	
	public function getTAHotel($hotelID){
		$query = "SELECT `hotelID`, `luxaID`, `city`, `street`, `name`
				FROM `tahotel` WHERE `hotelID` = '".$hotelID."'";
		$result = mysql_query($query);		
		if (mysql_num_rows($result) > 0) {
			return mysql_fetch_assoc($result);
		}
		return FALSE;
	}
	
	public function setTAHotel($hotel){
		$query = "INSERT INTO `tahotel` (`hotelID`, `city`, `street`, `name`)
				VALUES ('".$hotel['hotelID']."', '".$hotel['city']."', '".$hotel['street']."', '".$hotel['name']."')";
		mysql_query($query);
		mysql_query("DELETE FROM `tarating` WHERE `hotelID` = '".$hotel['hotelID']."'");
		$rated = FALSE;
		foreach ($hotel['marks'] as $mark => $count) {
			for ($i=0; $i < $count; $i++) {
				$rated = TRUE;
				mysql_query("INSERT INTO `tarating` (`hotelID`, `rating`) VALUES ('".$hotel['hotelID']."', ".$mark.")");
			}
		}
		$hotel['rating'] = NULL;
		if ($rated) {
			$result = mysql_query("SELECT AVG(`rating`) as `rating`, COUNT(*) as `count` FROM `tarating` WHERE `hotelID`='".$hotel['hotelID']."' GROUP BY `hotelID`");
			$rating = mysql_fetch_assoc($result);
			mysql_query("UPDATE `tahotel` SET `rating`=".$rating['rating'].", `ratingCnt`=".$rating['count']." WHERE `hotelID`='".$hotel['hotelID']."'");
			$hotel['rating'] = $rating;
		}
		return $hotel;
	}
}
