<?php

if ($handle = opendir('.')) {
    echo readdir($handle);
    while ($entry = readdir($handle)) {
        if ($entry != "." && $entry != "..") {
            echo "$entry"."<br>";
        }
    }
    closedir($handle);
}