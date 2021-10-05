<?php

echo "Enter the first number: ";
fscanf(STDIN, "%d\n", $a);
echo "Enter the second number: ";
fscanf(STDIN, "%d\n", $b);

$add = $a + $b;
$minus = $a - $b;
$multiply = $a * $b;
$divide = $a / $b;
$modulus = $a % $b;
$power = $a ** $b;

echo "Enter the your choice: ";
fscanf(STDIN, "%d\n", $choice);

switch ($choice){
  case 1: echo 'Sum is '.$add;
  break;
  case 2: echo 'Subtraction is '.$minus;
  break;
  case 3: echo 'Multiplication is '.$multiply;
  break;
  case 4: echo 'Division is '.$divide;
  break;
  case 5: echo 'Remainder is '.$modulus;
  break;
  case 6: echo 'Power is '.$power;
  break;
  default: echo "Invalid Input!!!";
  
}
?>