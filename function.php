<?php
function display()
{
  echo "Welcome to my project";

}
display();
////FUNCTION WITH PARAMETER///
echo "<br>";
function display_2(
  $name1, $name2
){
  echo "$name1 , $name2 <br>";
}


display_2("Tamanna" ,20);
display_2("Syeda", "Tamanna");
//////DEFAULT ARGUMENT////
function display_3(
  $n1, $n2, $n3="Coders Hive")
  {
    echo "$n1 to $n2  $n3 </br>";
  }
  display_3("Welcome" , "Your" );
?>