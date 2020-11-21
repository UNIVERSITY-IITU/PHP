<?php
//echo $_POST["login"];
//echo $_POST["password"];

if ($_POST["login"] == "user" && $_POST["password"] == "qwerty"){
    header("Location : profile.php");
}
else{
    header("Location : h.html");
}