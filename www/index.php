<? echo "parser starts here<br/><br/>";
$hostname = 'localhost';
$username = 'root';
$password = '123123';
 
// Подключаемся к серверу MySQL
$db = mysql_connect($hostname, $username, $password);
 
// Устанавливаем нужную кодировку
mysql_set_charset('utf8');
 
// Выбираем нужную БД
mysql_select_db('luxa');
 
// Формируем и отправляем запрос, результат запишется в $result
$query = "SELECT  `hotel`.`hotelID` AS  `hotelID` , CONCAT(  `city`.`name` ,  ' ',  `hotel`.`name` ) AS  `name` 
FROM  `city` ,  `hotel` 
WHERE  `city`.`cityID` =  `hotel`.`cityID` 
LIMIT 0 , 30";
$result = mysql_query($query)
        or trigger_error(mysql_errno() . ' ' . 
            mysql_error() . ' query: ' . $sql);
 
// проверяем вернулась ли хотя бы 1 строка
if (mysql_num_rows($result) > 0) {
    // вытаскиваем одну за другой строки, помещаем в $row
    while ($row = mysql_fetch_assoc($result)) {
        // строка вернулась в виде ассоциативного массива
        echo "<a href='results.php?q=".$row['name']."'>{$row['name']}</a> <br>";
    }
} else {
    echo 'Таблица `users` пуста';
}
 
mysql_close($db);