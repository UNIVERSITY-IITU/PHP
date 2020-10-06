<?php
//echo $_POST["login"];
//echo $_POST["password"];


if ($_POST["login"] == "user" && $_POST["password"] == "qwerty"){
//    echo "hello";
    header("Location : profile.php");
    exit();
}
//else{
//    header("Location : h.html");
//}