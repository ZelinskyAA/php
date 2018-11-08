<?php
header('Content-Type: text/html; charset=utf-8');
function translit($text){
$text = (string) $text;
$text = strtr($text, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
$text = str_replace(" ", "_", $text); // заменяем пробелы знаком минус
return $text;
}
$result = translit('Текст введенный на русском языке, выводится на транслите');
echo $result;

?>
