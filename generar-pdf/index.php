<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$Html2Pdf = new Html2Pdf();
/***************** */
//NO ME HA FUNCIONADO
/***************** */
/*
$content = "";
$content .= "<h1>Hola Mundo desde una librería de PHP para hacer PDFs</h1>";
$content .= "<p>Desde el Master en PHP</p>";

$html2pdf->writeHTML('<h1>Hola Mundo desde una librería de PHP para hacer PDFs</h1>');

$html2pdf->output('pdf_generado.pdf');
*/
/***************** */

/***************** */
//SI ME HA FUNCIONADO
/***************** */
//Recoger la vista a imprimir
ob_start();
//include dirname(__FILE__).'/examples/example00.php';
include dirname(__FILE__).'/examples/example02.php';
$content = ob_get_clean();
$html2pdf = new Html2Pdf('P', 'A4', 'es');
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content);
//$html2pdf->output('example00.pdf');
$html2pdf->output('example02.pdf');
/***************** */

?>