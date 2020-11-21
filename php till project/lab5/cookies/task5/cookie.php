<?php

setcookie("email_", $_POST['email']);
setcookie("password_", sha1($_POST['password']));

echo "<p>".$_COOKIE["email_"]."</p>";
echo "<p>".$_COOKIE["password_"]."</p>";
