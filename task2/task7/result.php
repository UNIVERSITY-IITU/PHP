<?php

include "db.php";

if (!empty($city)){
    echo "<p>Name : ".$_POST["name"]."<p>";
    echo "<p>Surname : ".$_POST["surname"]."<p>";
    echo "<p>City : ".$_POST["city"]."<p>";
    echo "<p>Age : ".$_POST["age"]."<p><br>";

    if ((int)$_POST["age"] >= 15) {
        echo "<p>Otels recomended for you :  </p>";

        foreach ($city[$_POST["city"]] as $key => $row) {
            echo "<p>Otel : " . $row . "<p>";
        }
    }
}