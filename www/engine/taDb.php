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
				FROM `hotel` WHERE `hotelId` = ".$hotelId." 
									AND `hotel`.`locationId` = `location`.`locationId`";
		$result = mysql_query($query);
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
	}
}