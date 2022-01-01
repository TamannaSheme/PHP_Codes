<?php

$name[0]="sheme";
$name[1]="Tamanna";
$name[2]="shumi";
$name[3]="shethe";
$name[4]="shakib";
$name[5]="sheman";
$name[6]="sujon";

foreach($name as  $value){
  echo $value . "</br>";
}
///////////////////////////////////////
foreach($name as $key => $value){
  echo $key . " " .$value . "</br>";
}

//////foreach loop with associative array/////

$fees = array("tamanna" =>3010, "sumi" =>5000, "sheme" =>2500, "sakib" =>10, "shethe" =>50, "Sujon"=>275);
foreach($fees as  $value):
  echo $value . "</br>";
endforeach;

////////////////////////////

foreach($fees as $key => $value){
  echo $key . " " .$value . "</br>";
}

?>