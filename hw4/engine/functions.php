<?php

function outputImg($dir){
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
}
