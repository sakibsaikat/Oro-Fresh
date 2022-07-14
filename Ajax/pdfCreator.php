<?php

require __DIR__."/vendor/autoload.php";
use Dompdf\Dompdf;
use Dompdf\Options;

$option  = new Options();
$option->setChroot(__DIR__);

$pdf = new Dompdf();
$pdf->setOptions($option);

while($row = mysqli_fetch_assoc($result)){
    
    $htm = '
    <h1 style="text-align:center">'.$row['name'].'</h1>
    <img src="white-teeth.png" width:"150">
';
    
}



 
$pdf->loadHtml($htm);
$pdf->render();

$pdf->stream("roni.pdf",["Attachment"=>0]);


Ajax



?>