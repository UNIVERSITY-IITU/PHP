<?php

function display(){
    echo "<p> User : ".$_POST["name"]." ".$_POST["surname"]." </p><br>";
    echo "<p> Ordered : ".$_POST["food"]."</p><br>";
}

display();