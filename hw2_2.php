<?php
//Генерируем случайное число
$a = rand(0,15);
//Выводим на экран начальное значение
echo 'StartNum: '.$a;
echo '<br>';
//Выводим на экран результат
echo 'Result: <br>';
switch($a){
  case 0:
    echo '0';
    echo '<br>';
    $a++;
  case 1:
    echo '1';
    echo '<br>';
    $a++;
  case 2:
    echo '2';
    echo '<br>';
  $a++;
  case 3:
    echo '3';
    echo '<br>';
  $a++;
  case 4:
    echo '4';
    echo '<br>';
  $a++;
  case 5:
    echo '5';
    echo '<br>';
  $a++;
  case 6:
    echo '6';
    echo '<br>';
    $a++;
  case 7:
    echo '7';
    echo '<br>';
    $a++;
  case 8:
    echo '8';
    echo '<br>';
    $a++;
  case 9:
    echo '9';
    echo '<br>';
    $a++;
  case 10:
    echo '10';
    echo '<br>';
    $a++;
  case 11:
    echo '11';
    echo '<br>';
    $a++;
  case 12:
    echo '12';
    echo '<br>';
    $a++;
  case 13:
    echo '13';
    echo '<br>';
    $a++;
  case 14:
    echo '14';
    echo '<br>';
    $a++;
  case 15:
    echo '15';
    echo '<br>';
  break;
}
?>
