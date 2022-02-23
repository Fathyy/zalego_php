<?php
// arithmetic operators
$a=5;
$b=6;
echo "the sum of $a and $b is" . $a +  $b;
echo "<br>";
// assignment
$balance=56;
 echo $balance +=5;
 echo "<br>";
 echo $balance-=60;
 echo "<br>";
 echo $balance *=60;
 echo "<br>";
 echo $balance /=60;

// comparsion opertaors: boolean
// == exactly equal to
// === identical

echo "<br>";
$amount=80;
$amount_2="80";
var_dump($amount_2 == $amount);

echo gettype($amount);
echo "<br>";
echo gettype($amount_2);
echo "<br>";
// assignment begins
$x=200;
$y=300;
var_dump($x == $y);

$x=9;
echo ++$x; //10

echo $y++;  //5

// assignment ends


 
?>