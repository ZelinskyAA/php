<?php
echo "<link rel='stylesheet' href='./css/style.css'>";
echo "<h1>Hello! Welcome to the gallery</h1>";
echo "<h2>If you want to open img please click on it</h2>";
require_once('../config/config.php');
outputImg('img');

$dir = "img";
$imgArr = array();
//Заносим все файлы с адресами из директории img в массив
if($handle = opendir($dir)){
    while(false !== ($file = readdir($handle))) {
        if($file != "." && $file != ".."){
            $imgArr[] = $dir."/".$file;

        }
    }
}

//Выводим файлы из массива
foreach ($imgArr as $value){
    echo "<a href=$value> <img class='imgmin' src=$value alt='Desert'> </a>";
  //  echo "<br>";
}