<?php
set_include_path(get_include_path() . PATH_SEPARATOR . "/Users/aggressiveghostsgmail.com/PhpstormProjects/topdf/dompdf");


use Dompdf\Dompdf;

$html = <<<'ENDHTML'
<html>
 <body>
  <h1>Hello world</h1>
 </body>
</html>
ENDHTML;



$dompdf = new DOMPDF();
$dompdf->set_paper("A4");

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("hello.pdf");
