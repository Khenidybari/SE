<?php
require('tcpdf/tcpdf.php');

$name = $_POST['name'];
$course = $_POST['course'];
$date = $_POST['date'];

$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', true);

$pdf->SetTitle('Certificate of Completion');

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 24);
$pdf->writeHTML

("
<style>
*{
  text-align: center;
}
</style>
<h1> Certificate of Alumni </h1>
<p> This certifies that </p>
<h2> $name </h2>
<p> is an active member of
Western Mindanao State University General Alumni Association
Incorporated (WMSUGAAI) from 1996 to present. </p>
<h2> $course </h2>
<p> on $date </p>
<p> MA. NORA D. LAI, Ed.D.Director, Alumni Relations Office</p>
");

$pdf->Output($name . '-' . $course . '-' . 'certificate.pdf', 'D');