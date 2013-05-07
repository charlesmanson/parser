<? echo "parser starts here<br/><br/>";
$hostname = 'localhost';
$username = 'root';
$password = '123123';

$db = mysql_connect($hostname, $username, $password);
mysql_set_charset('utf8');
mysql_select_db('luxa');

// Формируем и отправляем запрос, результат запишется в $result
$query = "SELECT  `hotel`.`hotelID` AS  `hotelId` , `city`.`name` AS `city`, `hotel`.`name` AS  `hotel` 
FROM  `city` ,  `hotel` 
WHERE `hotel`.`rating` = 0 AND `city`.`cityID` =  `hotel`.`cityID`"; 
//LIMIT 0 , 30";
$result = mysql_query($query)
        or trigger_error(mysql_errno() . ' ' . 
            mysql_error() . ' query: ' . $sql);
 
// проверяем вернулась ли хотя бы 1 строка
if (mysql_num_rows($result) > 0) {
    mysql_select_db("parser");
    while ($row = mysql_fetch_assoc($result)) {
       print_r($row);
        mysql_query("INSERT INTO `luxahotel` (`hotelId`, `hotel`, `city`) 
        VALUES (".$row['hotelId'].", '".$row['hotel']."', '".$row['city']."')");
        echo "INSERT INTO `luxahotel` (`hotelId`, `hotel`, `city`) 
        VALUES (".$row['hotelId'].", '".$row['hotel']."', '".$row['city']."')";
    }
} else {
    echo 'Таблица `users` пуста';
}
 
mysql_close($db);