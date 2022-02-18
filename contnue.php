<?php
for($num=1; $num<1000; $num++){
    if($num % 9 == 0){
        echo "the number is divisible by 9 <br>";
        continue;
    }
    echo "current number $num <br>";
}

?>