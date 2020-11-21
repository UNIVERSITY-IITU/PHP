<?php
//if (isset($_POST["cookie"])){
//    echo $_POST['cookie'];
//    $value = $_POST['cookie'];
//    setcookie("name", $value);
//    header('Location: task1.php');
//}

$value = $_POST['cookie'];
setcookie("cookie", $value);
