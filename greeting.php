<?php
function reminder(){
    echo "hello Mary, its 3:54";
}
reminder();
echo "<br>";


// passing a single parameter
function reminderWithnameParameter($friendName){
    echo "Good afternoon $friendName it is 4.00pm";
    }

    reminderWithnameParameter("Ayall");

    // third approach name with default value

    function reminderNameDefault($friendName = "Gg"){
        echo "Good afternoon" . strtoupper($friendName) . "it is 4.00pm";

    }
    reminderNameDefault();
    echo "<br>";

    // fourth approach

    function reminderTwoParameter($friendName = "Lulu", $time){
        echo "Good afternoon" . strtoupper($friendName) . "it is $time";   
    }
    reminderTwoParameter("Peter", "4:16pm");

    echo "<br>";
    
// final approach
function finalReminder($friendName = "Lulu", $time){
    return "Hey $friendName and its $time"; // return here returns a value of the function

}
echo $time = date("h:i:s");
echo date_default_timezone_set("Africa/Nairobi");
echo date_default_timezone_get();
 

echo finalReminder("Lily", date("h:i:s"));