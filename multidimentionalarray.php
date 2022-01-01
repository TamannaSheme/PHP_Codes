<?php
$laptop = array (
  array ("Syeda", "Dell", 10),

  array ("Tamanna", "HP", 11),

  array ("Tamanna", "Zed", 12),
);
echo "</br>";
echo $laptop [1][2];
echo "</br>";
for($i=0; $i<count($laptop); $i++)
{
  for($j=0; $j<count($laptop[$i]); $j++ )
  {
    echo $laptop[$i] [$j] . " ";
  }
  echo "</br>";
}

?>