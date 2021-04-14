<?php

$x = $_GET["num1"];
$y = $_GET["num2"];
$op = $_GET["operacao"];

if($op=="SOMA")
 $z = $x + $y;

elseif($op=="SUBTRAÇÃO")
  $z = $x - $y;

elseif($op=="MULTIPLICAÇÃO")
  $z = $x*$y;

else
  $z = $x/$y;

echo "O resultado é: $z";
?>