<?php
require_once('../config/config.php');
//Подключаемся к БД
$link = new mysqli("localhost", "root", "", "Shop");
if ($link->connect_error) {
    die("Ошибка: не удается подключиться: " . $link->connect_error);
    }
mysqli_set_charset($link, "utf8");

//Выводим ПЭВМ
echo "ПЭВМ:";
$query= "SELECT * FROM Product where prodCatId='1'";
$result = $link->query($query);
while($row = $result->fetch_array(MYSQLI_NUM))
{
    $rows[] = $row;
    echo "<div>";
    $btnName = "b_".$row[0];
    echo "<input type='submit' name='$btnName' value='$row[1]' />";
    echo "<img class ='imgmin' alt = '$row[1]' src = '$row[3]'>";
    echo "<hr>";
    echo "</div>";
}

//Выводим Мониторы
echo "Мониторы:";
$query= "SELECT * FROM Product where prodCatId='2'";
$result = $link->query($query);
while($row = $result->fetch_array(MYSQLI_NUM))
{
    $rows[] = $row;
    echo "<div>";
    $btnName = "b_".$row[0];
    echo "<input type='submit' name='$btnName' value='$row[1]' />";
    echo "<img class ='imgmin' alt = '$row[1]' src = '$row[3]'>";
    echo "<hr>";
    echo "</div>";
}
mysqli_close($link);
