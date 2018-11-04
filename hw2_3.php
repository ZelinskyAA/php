<?php
//Генерируем случайное число
$a = rand(1,100);
$b = rand(1,100);
//Выводим на экран начальные значения
echo 'a='. $a;
echo '<br>';
echo 'b='. $b;
echo '<br>';
//Функция сложения
function Plus($x,$y){
  return $x+$y;
}
//Функция вычитания
function Minus($x,$y){
  return $x-$y;
}
//Функция умножения
function Mult($x,$y){
  return $x*$y;
}
//Функция диления
function Div($x,$y){
  return $x/$y;
}
//Выводим на экран результат выполнения функций
echo 'Addition: ' . Plus($a,$b);
echo '<br>';
echo 'Subtraction: ' . Minus($a,$b);
echo '<br>';
echo 'Division: ' . Div($a,$b);
echo '<br>';
echo 'Multiplication: ' . Mult($a,$b);
echo '<br>';
?>
