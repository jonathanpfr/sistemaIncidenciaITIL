<?php
require('../../../paquetes/fpdf/fpdf.php');
require_once ("../../../clases/reporte/class_reporte.php");
require_once ("../../../clases/conexion.php");

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$fec_ini = $_GET['fec_ini'];
$fec_fin = $_GET['fec_fin'];
$cadena = $_GET['cadena'];
$cl = new reporte();
$consulta = $cl->area_mas_incidencia($fec_ini, $fec_fin);

$pdf->SetFont('Arial', '', 10);

$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);

$pdf->Cell(240, 8, 'AREA CON MAS INCIDENCIA ' . $cadena, 0, 0, 'C'); //al centro


$pdf->Ln(20);

$pdf->SetFillColor(176, 196, 222);

$pdf->setfont('Arial', 'U', 10);
$pdf->Cell(75, 10, '', 0, 0);
$pdf->Cell(30, 8, 'AREA', 1, 0, 'C', true);
$pdf->Cell(70, 8, 'INCIDENCIAS', 1, 0, 'C', true);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

for ($i = 0; $i < sizeof($consulta); $i++) {
    $pdf->setfont('Arial', '', 9);
    $pdf->Cell(75, 10, '', 0, 0);
    $pdf->Cell(30, 10,$consulta[$i]["nombre_area"], 1, 0, 'C');
    $pdf->Cell(70, 10, $consulta[$i]["numero"], 1, 0, 'C');
    $pdf->Ln(10);
}
//$pdf->Cell(12, 8, round($reg[$i]["punto_precio_b"], 2), 1, 0, 'C');

$pdf->Output();
?>
