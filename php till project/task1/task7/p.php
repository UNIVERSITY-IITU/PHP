<?php
$text1 = "Text messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile devices, desktops/laptops, or other type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.";
$text2 = "Text messages are used for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.";

$similar = similar_text($text2, $text1, $percentage);


echo "FIRST TEXT:"."<br>"."<p>". $text1 ."</p>";
echo "SECOND TEXT:"."<br>"."<p>". $text2 ."</p>";


if ( ($percentage >=0 ) &&($percentage <=20 )) {
    echo "degree of coincidence is 1";
}
else if (($percentage >20 ) &&($percentage <=40 )) {
    echo "degree of coincidence is 2";
}
else if (($percentage >40 ) &&($percentage <=60 ) ) {
    echo "degree of coincidence is 3";
}
else if (($percentage >60 ) &&($percentage <=80 ) ) {
    echo "degree of coincidence is 4";
}
else if (($percentage >80) &&($percentage <=100 ) ) {
    echo "degree of coincidence is 5";
}