<?php

require 'vendor/autoload.php';
use Carbon\Carbon;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Mpdf\Mpdf;

////////////

$fimg = "index.jpeg";
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
$c = new Carbon;
echo $c->diffForHumans($c->year());
?>


<br>
<br>
<br>

<br>
<br>
<br>
<?php
$pdf = new Mpdf();
$pdf->WriteHTML("hi");
$pdf->SetDisplayMode('fullpage');
$pdf->SetWatermarkText('etutorialspoint');
$pdf->showWatermarkText = true;
$pdf->watermarkTextAlpha = 0.1;
return $pdf->Output();
?>