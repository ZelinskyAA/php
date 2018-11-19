<?php
require_once('../config/config.php');
echo "<link rel='stylesheet' href='./css/style.css'>";
//Подключаемся к БД
$link = new mysqli("localhost", "root", "", "Shop");
if ($link->connect_error) {
    die("Ошибка: не удается подключиться: " . $link->connect_error);
}
mysqli_set_charset($link, "utf8");

//Выводим информацию по продукту
$query= "SELECT * FROM Product";
$result = $link->query($query);
while($row = $result->fetch_array(MYSQLI_NUM))
{
    $rows[] = $row;
    $btnName = "b_".$row[0];
    echo "<br>";
    if (isset($_POST[$btnName])){
        $prodCatId = $row[0];
        echo "<form action='add_comment.php' method='post'>";
        echo "<h1>".$row[1]."</h1>";
        echo "<br>";
        echo "<h2>Описание товара</h2>";
        echo "Артикул товара:";
        echo "<br>";
        echo "<input type='number'  name='art' value='$row[0]' readonly >";
        echo "<br>";
        echo "Подробное описание:";
        echo "<br>";
        echo $row[2];
        echo "Цена: ".$row[4];
        echo "<br>";
        echo "<img class ='imgmax' alt = '$row[1]' src = '$row[3]' name = '$row[0]'>";
        echo "<br>";
        echo "<h2>Оставьте пожалуйста ваш отзыв о товаре</h2>";
        echo "<br>";
        echo "<textarea name = 'commentText' rows='5' cols='100'></textarea>";
        echo "<br>";
        echo "<input type='submit' name='commentSend' value='Отправить отзыв'>";
        echo "</form>";
        echo "<br>";
        echo "<h2>Текущие отзывы</h2>";
    }
}
    $result->close();

//Выводим отзывы
$query = "SELECT * FROM comment where comProdId='$prodCatId'";
$result = $link->query($query);
if ($result) {
    if($result->num_rows == 0){
        echo "<p>Отзывы по данному товару отсутствуют</p>";
    } else {
        while($row = $result->fetch_array())
        {
            $rows[] = $row;
            echo "<div>";
            echo "Отзыв № ".$row[0];
            echo "<br>";
            echo $row[1];
            echo "</div>";
            echo "<hr>";
        }
    }
}
$result->close();


mysqli_close($link);
