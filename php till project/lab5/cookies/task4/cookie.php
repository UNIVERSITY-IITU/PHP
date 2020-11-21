<?php
include "db4.php";

if (!empty($data)){
$name = $_GET['name'];
foreach ($data as $key=> $value){
    if(strcmp($name,$key)==0){
        $new_str = str_replace(' ', '_', $key);
        setcookie("name[$new_str]", $value , time() +3600);
    }

}
}