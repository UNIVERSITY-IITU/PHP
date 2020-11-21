<?php


function is_valid($n){
    if ((int)$n%5!=0 && strpos((string)$n, "3")){
        return true;
    }
    return false;
}

for ($i=0; $i<10000; $i++){
    if (is_valid($i)){
        echo $i."<br>";
    }
}