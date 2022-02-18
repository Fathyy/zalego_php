<?php
echo date('l -F - y h:i:s');
echo "<br>";
echo $time=date('H');
if($time < 12){
    echo "Good morning";
}
elseif($time ==12){
    echo "good noon";
}
elseif( $time<16){
    echo "good afternoon";
}
else{
    if($time<19){
        echo "Good Evening";
    }
    else{
        echo "Good night";
    }
}
?>