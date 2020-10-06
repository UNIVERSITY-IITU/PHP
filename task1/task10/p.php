<?php
$file =fopen("data.txt", "a");
fwrite($file, "Name: " . $_POST["name"]."\n"."Surname :". $_POST["surname"]."\n"."EMAIL: ".$_POST["email"] ."\n" ."Lang: ".$_POST["category"] . "\n"."TEXTAREA:"."\n".$_POST["info"]."\n");
fclose($file);