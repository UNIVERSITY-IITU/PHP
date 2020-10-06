<?php

$numbers = array(5,6,7,8,25,34);


foreach ($numbers as &$value){
    echo $value, "%5=", $value % 5, PHP_EOL."<br>";
    echo $value, "%3=", $value % 3, PHP_EOL."<br>";
}