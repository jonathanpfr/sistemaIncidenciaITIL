<?php

require_once ('../../../paquetes/jpgraph-3.5.0b1/src/jpgraph.php');
require_once ('../../../paquetes/jpgraph-3.5.0b1/src/jpgraph_pie.php');
require_once ('../../../paquetes/jpgraph-3.5.0b1/src/jpgraph_pie3d.php');

require_once ("../../../clases/reporte/class_reporte.php");
require_once ("../../../clases/conexion.php");
// Browser usage statistics, %  
$fec_ini = $_GET['fec_ini'];
$fec_fin = $_GET['fec_fin'];
$cadena = $_GET['cadena'];
$cl = new reporte();
$consulta = $cl->area_mas_incidencia($fec_ini, $fec_fin);
$total=0;

for ($i = 0; $i < sizeof($consulta); $i++) {
    $numero_tesis2=$consulta[$i]["numero"];
    $total=$total+$numero_tesis2;
}

for ($i = 0; $i < sizeof($consulta); $i++) {
    
    $nombre[]=utf8_decode($consulta[$i]["nombre_area"]);
    $numero=$consulta[$i]["numero"];
    $porcentaje[]=  round((($numero/$total)*100),2) ;
}

$data = $porcentaje; // porcentaje
$legends =$nombre;// array("eee", "iiii");//nombre

$graph = new PieGraph(600, 420);
$graph->SetShadow();

// Naming the graphic  
$graph->title->Set('AREA CON MAS INCIDENCIA '.$cadena);
$graph->title->SetFont(FF_VERDANA, FS_BOLD, 10);

// Legend positioning (%/100)   
//$graph->legend->Pos(0.1, 0.2);
$graph->legend->Pos(0.1, 0.1);

// Creating a 3D pie graphic   
$p1 = new PiePlot3d($data);

// Setting the graphic center (%/100)   
$p1->SetCenter(0.45, 0.5);

// Setting the ancle   
$p1->SetAngle(30);

// Choosing the type   
$p1->value->SetFont(FF_ARIAL, FS_NORMAL, 12);

// Setting legends for graphic segments  
$p1->SetLegends($legends);

// Adding the diagram to the graphic  

$graph->Add($p1);
// Showing graphic  

$graph->Stroke();
?>