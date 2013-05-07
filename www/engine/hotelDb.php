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
		mysql_select_db('parser');
	}
	
	public function getLuxaList($page){
		$query = "SELECT  `hotelId` AS  `luxaId` , CONCAT(  `city`,  ' ',  `hotel`) AS  `name` 
		FROM  `luxahotel` LIMIT ".$page*$pageSize.",".$this->pageSize;
		$result = mysql_query($query);
		$list = Array();
		if (mysql_num_rows($result) > 0) {
			while ($row = mysql_fetch_assoc($result)) {
				$list[$row['luxaId']] = $row;
			}
		}
		return $list;
	}
	
	public function numPages(){
		$result = mysql_query("SELECT `luxaId` FROM `luxahotel`");
		return ceil(mysql_num_rows($result) / $this->pageSize);
	}
}
