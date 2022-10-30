<?php
#Variables declared
$word = "Hello";
$num = 3;


#Repeat function based on number
function repeat($word,$num){
    $i = 0;
    if ($num > 0){
        while ($i < $num){
            echo $word;
            $i++;
        }
    }else echo " "; #If number is 0 or less, it prints nothing
}


repeat($word,$num); #Calls function
?>