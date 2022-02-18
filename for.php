<?php
// for($num=1; $num <=20; $num++){
//     echo "number $num <br>";
// }


// echo "<br>";

// // assignment
// for($num=1; $num <=150; $num++){
//     echo "number $num <br>";
// }
echo "<br>";
echo $today = date('d');
for($day= 1; $day <=$today; $day++){
    echo "day $day";
}
echo "<br>";
// write numbers 0-100 but print those divisible by 7
for($num=1; $num <=100; $num++){
         if($num % 7==0){
             echo $num;
         }
     }

echo "<br>";
     for($num=1; $num <=100; $num+=7){
             echo "number $num <br>";
         }
?>