<?php
// 1
echo'Tomorrow I \'ll learn PHP global variables. <br>';
echo 'This is a bad command : del c:';

echo "<br>";


// Q2

function area($length = 7, $width = 6)
{
    $area = $length * $width;
    echo "Area Of Rectangle is " . $area ;
}
area(); 

echo "<br>";

// Q3
$age = 16;
if ($age>18){
    echo "you are eligible to vote";
}
else{
    echo "You are not eligible to vote";
}
echo "<br>";
// Q4
function add($num1 = 7, $num2 = 6)
{
    $add = $num1 + $num2;
    echo "The addition is " . $add ;
}
add(); 
echo "<br>";

// Q5 Switch statement
$weekDay = "Sunday";
switch ($weekDay) {
    case "Sunday":
        echo "Today is Sunday";
        break;
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
     case "Wednesday":
        echo "Today is Wednesday";
        break;
     case "Thursday":
        echo "Today is Thursday";
        break;
     case "Friday":
        echo "Today is Friday";
        break;
	default:
	echo "Day is unknown";
}

echo "<br>";

// Q6

$marks = 40;

if ($marks>=80)
{
	$grade = "A";
}
else if($marks>=60)
{
	$grade = "B";
}
else if($marks>=33)
{
	$grade = "C";
}
else
{
	$grade = "Fail";
}

echo "Student grade: $grade";

echo "<br>";


$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";

echo "<br>";
echo substr('a,b,c,d,e,', 0, -1);

echo "<br>";
$string = 'zeeshan';
$reverse = '';
$i = 0;
while(!empty($string[$i])){ 
      $reverse = $string[$i].$reverse; 
      $i++;
}
echo $reverse;


?>