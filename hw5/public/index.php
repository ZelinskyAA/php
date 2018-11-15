<?php
echo "<link rel='stylesheet' href='./css/style.css'>";
echo "<h1>Hello! Welcome to the gallery</h1>";
echo "<h2>If you want to open img please click on it</h2>";
require_once('../config/config.php');

//$link = mysqli_connect("localhost", "root", "", "hw5");
$link = new mysqli("localhost", "root", "", "hw5");

if ($link->connect_error) {
    die("Ошибка: не удается подключиться: " . $link->connect_error);
}
$query= "SELECT * FROM picinf Order by piStat DESC";
$result = $link->query($query);

while($row = $result->fetch_array(MYSQLI_NUM))
{
    $rows[] = $row;
    echo "<a href=$row[3]> <img class='imgmin' src=$row[3] alt=$row[2]> </a>";
   // echo "<form> <input type = 'image' class ='imgmin' src='$row[3]' name='$row[2]'/></form></p>";
}


/* очищаем результаты выборки */
mysqli_free_result($result);

$picID = '1'; //введите ид картинки
$query= "SELECT * FROM picinf WHERE piID=$picID";
$result = $link->query($query);
$row = $result->fetch_array(MYSQLI_NUM);
echo "<br>"."Вывод картинки по ИД"."<br>";

echo "<a href=$row[3]> <img class='imgmin' src=$row[3] alt=$row[2]> </a>";
//echo "<form> <input type = 'image' class ='imgmin' src='$row[3]' name='$row[2]'/></form></p>";
/* очищаем результаты выборки */
mysqli_free_result($result);

$link ->close();