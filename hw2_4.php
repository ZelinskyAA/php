<?php
//Генерируем случайное число
$a = rand(1,100);
$b = rand(1,100);
//Выводим на экран начальные значения
echo 'a='. $a;
echo '<br>';
echo 'b='. $b;
echo '<br>';
//Определяем операцию Plus, Minus, Mult, Div
$oper = 'Minus';
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
//Функция  В зависимости от переданного значения операции выполнить одну из арифметических операций
function  mathOperation($arg1, $arg2, $operation){
  switch($operation){
    case 'Plus':
    echo Plus($arg1,$arg2);
    break;
    case 'Minus':
    echo Minus($arg1,$arg2);
    break;
    case 'Mult':
    echo Mult($arg1,$arg2);
    break;
    case 'Div':
    echo Div($arg1,$arg2);
    break;
  }
}
mathOperation($a,$b,$oper);//Выполняем функцию mathOperation
?>
