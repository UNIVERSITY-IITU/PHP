<?php

$file1 = file_get_contents("file1.txt");
$file2 = file_get_contents("file2.txt");
$file3 = file_get_contents("file3.txt");
$file4 = file_get_contents("file4.txt");
$file5 = file_get_contents("file5.txt");


$programming = array("python", "Abstract", "parser");

if (!empty(array_intersect($programming, explode(" ", $file1)))){
    echo "file1  related to the topic<br>";
}else{
    echo "file1  No related to the topic<br>";
}

if (!empty(array_intersect($programming, explode(" ", $file2)))){
    echo "file2  related to the topic<br>";
}else{
    echo "file2  No related to the topic<br>";
}

if (!empty(array_intersect($programming, explode(" ", $file3)))){
    echo "file3  related to the topic<br>";
}else{
    echo "file3  No related to the topic<br>";
}

if (!empty(array_intersect($programming, explode(" ", $file4)))){
    echo "file4  related to the topic<br>";
}else{
    echo "file4  No related to the topic<br>";
}

if (!empty(array_intersect($programming, explode(" ", $file5)))){
    echo "file5  related to the topic<br>";
}else{
    echo "file5  No related to the topic<br>";
}