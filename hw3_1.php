<?php
function is_prime ($n)
{
    for($x=2; $x <= 100; $x++)
    {
        if($x % $n != 0)
        {
            echo $x;
            echo "<br>";
        }
    }
}
for($i=2; $i<=100; $i++)
{
  is_prime ($i);
}
?>
