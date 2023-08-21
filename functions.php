<?php

function Addition($number1, $number2)
{
  $addition = $number1 + $number2;
  return $addition;
}

function Substraction($sub1, $sub2)
{
  $substraction = $sub1 - $sub2;
  return $substraction;
}

function Multiplication($number1, $number2)
{
  $multiplication = $number1 * $number2;
  return $multiplication;
}

function Division($number1, $number2)
{
  $division = $number1 / $number2;
  return $division;
}

function Reminder($number1, $number2)
{
  $reminder = $number1 % $number2;
  return $reminder;
}

echo "Function php : <br/><br/>";
echo "Passing value by paramerter : <br/><br/>";

echo "Addition of (2+4) : ".Addition(2,4)."<br/>";

echo "Substraction of (10-8) : ".Substraction(10,8)."<br/>";

echo "Multiplication of (2*10) : ".Multiplication(2,10)."<br/>";

echo "Division of (4/4) : ".Division(4,4)."<br/>";

echo "Reminder of (3%5) : ".Reminder(3,5)."<br/><br/>";

echo "Passing value by reference : <br/></br/>";

$a = 10;
$b = 2;

echo "Addition of ($a+$b) : ".Addition($a,$b)."<br/>";
echo "Substraction of ($a-$b) : ".Substraction($a,$b)."<br/>";
echo "Multiplication of ($a*$b) : ".Multiplication($a,$b)."<br/>";
echo "Division of ($a/$b) : ".Division($a,$b)."<br/>";
echo "Reminder of ($a%$b) : ".Reminder($a,$b)."<br/>";


?>