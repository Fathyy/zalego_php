<?php
$subjects = array("maths", "English", "Biology", "Chemistry");
foreach($subjects as $key => $singleSubject){
    echo "$key is $singleSubject <br>";
}

echo "<br>";
// Associative arrays

$age = ["Jane"=>34, "Mary"=>24, "Alex"=>14,];

//to iterate through each element in a loop

foreach ($age as $key => $value){
    echo "Name is $key at index $value <br>";
}

?>