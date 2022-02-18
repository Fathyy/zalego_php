<?php
$a=50; 
if($a==5)
{
    echo "a must be 5";
}

?>

<h2>Odd and Even numbers</h2>
<?php
$num=0;
if($num % 2 >0)
{
    echo "the number $num is odd";
}
else{
    echo "the number $num is even";
}


echo "<br>";
$b = 6;
if($b >= 0){
    echo "the number $b is positive";
}
else{
    echo "the number $b is negative";
}

echo "<br>";
if($num >0){
    echo "the number is positive";
}

elseif($num ==0){
    echo "the number is 0";
}
else{
    echo "the number is negative";
}
?>