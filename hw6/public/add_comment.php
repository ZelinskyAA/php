<?php
require_once('../config/config.php');
//Подключаемся к БД
$link = new mysqli("localhost", "root", "", "Shop");
if ($link->connect_error) {
    die("Ошибка: не удается подключиться: " . $link->connect_error);
}
mysqli_set_charset($link, "utf8");

if (isset($_POST['commentSend'])) {
    $comText = '"' . $_POST['commentText'] . '"';
    $comProdId = '"' . $_POST['art'] . '"';

    $results = $link->query("SELECT COUNT(*) FROM comment");
    $get_total_rows = $results->fetch_row();
    if ($get_total_rows[0] == 0) {
        $comId = 1;
    } else {
        $comId = $link->query("SELECT MAX(comId) as comId FROM comment")->fetch_object()->comId;
        $comId = ++$comId;
    }
    echo "<br>";
    $insert_row = $link->query("INSERT INTO comment (comId, comText, comProdId) VALUES($comId, $comText, $comProdId)");

    if ($insert_row) {
        print 'Отзыв успешно добавлен в базу данных';
        echo "<br>";
        header('Refresh: 5; url=http://hw6.local/shop.html');
        echo 'Через 5 секунд вы будете перенаправлены на главную страницу сайта';
    } else {
        die('Error : (' . $link->errno . ') ' . $link->error);
    }
    mysqli_close($link);
}

