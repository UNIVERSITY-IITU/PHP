<?php

//$email = test_input($_POST["email"]);
$email = "amam@gmail.com";
$arr = array("kz", "com", "net");
if (filter_var($email, FILTER_VALIDATE_EMAIL)&& preg_match('/@.+\./', $email)) {
    echo "valid email format"."<br>";
}else{
    echo "Invalid email format"."<br>";
}