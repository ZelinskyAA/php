<?php
header('Content-Type: text/html; charset=utf-8');
$num=0;
do {
  if ($num == 0)
  {
    echo $num." - это ноль"."<br>";
  }
  if (($num == 1) OR ($num == 3) OR ($num == 5) OR ($num == 7) OR ($num == 9))
  {
    echo $num." - нечетное число"."<br>";
  }
  if (($num == 2) OR ($num == 4) OR ($num == 6) OR ($num == 8) OR ($num == 10))
  {
    echo $num." - четное число"."<br>";
  }
  $num++;
} while ($num <=10);
?>
