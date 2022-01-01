<?php
$n = 2;
echo "Value of n = $n </br>";

function add(&$a)
{
  echo "Value inside function $a </br>";
  $a = 4;
  echo "Value inside function $a </br>";
}
add($n);
echo "Value of n = $n </br>";

?>