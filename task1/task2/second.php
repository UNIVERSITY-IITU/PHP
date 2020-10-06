
<?php
$num = (int)$_POST['num'];
if ($num == 12 || $num <= 2) {
    echo "WINTER";
} elseif ($num > 2 && $num <= 5) {
    echo "AUTUMN";
}elseif ($num > 5 && $num <= 8) {
    echo "SUMMER";
}elseif ($num > 8 && $num <= 11) {
    echo "FALL";
} else {
    echo "ERROR";
}
?>