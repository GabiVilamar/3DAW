<?php

$x = $_POST["num1"];
$y = $_POST["num2"];
$op = $_POST["operacao"];

if($op=="SOMA")
 $z = $x + $y;

elseif($op=="SUBTRAÇÃO")
  $z = $x - $y;

elseif($op=="MULTIPLICAÇÃO")
  $z = $x*$y;

else
  $z = $x/$y;

echo "O resultado e: $z";