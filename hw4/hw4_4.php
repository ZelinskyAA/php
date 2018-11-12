<?php
header('Content-Type: text/html; charset=utf-8');
$a = array(2,7);
$b = array(6,8);

function lines($x = array(),$y = array()){
    if ($x[1] >= $y[0]){
        $res = "Не пересекаются";
        return $res;
    }
    else
    {
        $res = "Пересекаются";
        return $res;
    }
}
$result = lines($a,$b);
echo $result;