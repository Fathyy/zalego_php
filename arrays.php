<?php 
$subject = array("Kisw", "eng", "Bio", "maths", "Chem");

// retrieving data
echo $subject[0];
echo $subject[1];
echo $subject[2];
echo $subject[3];
echo $subject[4];

echo "<br>";

$colors = array("red", " orange", "yellow", "green", "blue", "indigo", "violiet");

echo $colors[0];
echo $colors[1];
echo $colors[2];
echo $colors[3];
echo $colors[4];
echo $colors[5];
echo $colors[6];


echo "<br>";

foreach($subject as $individualSubject){
    echo "subject $individualSubject <br>";
}

echo "<br>";


?>

<h2>Colors of a rainbow</h2>

<ul style="list-style-type: disc;">
<?php
foreach($colors as $key => $color){
    echo "<li> $key is $color </li>";
}
?>

</ul>

<?php 
echo "<br>";

 $friends = array("Mary", "john", "Nasra", "Ayall", "Lisa");
foreach($friends as $key => $friend) {
    $val = $key+1;
    echo "$val is $friend <br>";
}
?>