<?php

$a = $_POST['value1'];
$b = $_POST['value2'];
//Функция сложения
function Plus($x, $y)
{
    return $x + $y;
}

//Функция вычитания
function Minus($x, $y)
{
    return $x - $y;
}

//Функция умножения
function Mult($x, $y)
{
    return $x * $y;
}

//Функция деления
function Div($x, $y)
{
    return $x / $y;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['subCalc'])) {


        if ($_POST['operation'] == 'Сложение') {
            $result = Plus($a, $b);
            $oper = "+";
        }

        if ($_POST['operation'] == 'Вычитание') {
            $result = Minus($a, $b);
            $oper = "-";
        }

        if ($_POST['operation'] == 'Деление') {
            $oper = "/";
            if ($b == 0) {
                $result = "Error!";
            } else {
                $result = Div($a, $b);
            }
        }

        if ($_POST['operation'] == 'Умножение') {
            $result = Mult($a, $b);
            $oper = "*";
        }
    }
    if (isset($_POST['subPlus'])){
        $result = Plus($a, $b);
        $oper = "+";
    }
    if (isset($_POST['subMinus'])){
        $result = Minus($a, $b);
        $oper = "-";
    }
    if (isset($_POST['subMult'])){
        $result = Mult($a, $b);
        $oper = "*";
    }
    if (isset($_POST['subDiv'])){
        $oper = "/";
        if ($b == 0) {
            $result = "Error!";
        } else {
            $result = Div($a, $b);
        }
    }
}

echo 'Расчет: ';
echo '<br>';
echo $a.$oper.$b.'='.$result;