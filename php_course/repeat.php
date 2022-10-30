<?php
$word = "Hello";
$num = 3;


function repeat($word,$num){
    $i = 0;
    if ($num >= 0){
        while ($i < $num){
            echo $word;
            $i++;
        }
    }else echo " ";
}


repeat($word,$num);
?>