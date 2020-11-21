<?php

$file1 = fopen("1.txt", "r");
$file2 = fopen("2.txt", "r");
$fw1 =fopen("fw1.txt", "w");
$fw2 =fopen("fw2.txt", "w");
$c =0;

if ($file1) {
    while (($line = fgets($file1)) !== false) {
        if ($file2){            
            while ($line2= fgets($file2) !==false){
                if (strcmp($line2, $line) !== 0) {                    
                    $txt = $line . "<br>";
                    echo $txt . "<br>";
                    fwrite($fw1, $txt);
                }                
                if(strcmp($line2, $line) == 0){
                    $txt = $line . "<br>";
                    echo $txt . "<br>";
                    fwrite($fw2, $txt);                    
                    break;                
                }            
            }        
        }    
    }
}

fclose($fw1);
fclose($fw2);

