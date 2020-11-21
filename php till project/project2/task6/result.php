<?php
include "db.php";

if (!empty($questions)) {
    foreach ($questions as $key => $row) {
        $name = $questions[$key]["question"];
        echo "<p> Question : ".$name."</p>";
        $name = str_replace(" ", "_", $name);
        echo "<p> Your answer : ".$_POST[$name]."</p>";
        echo "<p> Right answer : ".$questions[$key]["answer"]."</p><br><br>";
    }
}