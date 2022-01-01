<?php
if((5>=2) && (7>=2))
{
  echo "PRINT-1 <br>";

  if(10<=2)
  {
    echo "PRINT-2 <br>";
  }
  else{
    echo "PRINT-3 <br>";
  }
}
else{
  echo "PRINT-4 <br>";
}

echo "<br>";
echo "<br>";

if((5>2) || (1>2))
{
  echo "PRINT-1 <br>";

  if(10>=2)
  {
    echo "PRINT-2 <br>";
  }
  else{
    echo "PRINT-3 <br>";
  }
}
else{
  echo "PRINT-4 <br>";
}

echo "<br>";
echo "<br>";
if( !(1>2))
{
  echo "PRINT-1 <br>";

  if(10<2)
  {
    echo "PRINT-2 <br>";
  }
  else{
    echo "PRINT-3 <br>";
  }
}
else{
  echo "PRINT-4 <br>";
}

echo "<br>";
echo "<br>";

if((5<2) and (5>3))
{
  echo "PRINT-1 <br>";
}
else{
  echo "PRINT-4 <br>";
}

echo "<br>";
echo "<br>";

if((5<2) or (5>3))
{
  echo "PRINT-1 <br>";
}
else{
  echo "PRINT-4 <br>";
}

echo "<br>";
echo "<br>";

if((5<2) xor (5>3))
{
  echo "PRINT-1 <br>";
}
else{
  echo "PRINT-4 <br>";
}

?>