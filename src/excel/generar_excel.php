<?php
require_once '../../conexion.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$fecha = $_POST['fecha'].'-'.$_POST['fechames'];



$config = "SELECT * FROM ventas where fecha LIKE '$fecha%'";
$resultado = $conexion->query($config);
//var_dump($config); exit(0);
$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("cliente");
$hojaActiva->getColumnDimension('A')->setWidth(30);
$hojaActiva->setCellValue('A1', 'id');
$hojaActiva->getColumnDimension('B')->setWidth(30);
$hojaActiva->setCellValue('B1', 'total');
$hojaActiva->getColumnDimension('C')->setWidth(35);
$hojaActiva->setCellValue('C1', 'fecha');

$fila = 2;
while ($rows = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['total']);
    $hojaActiva->setCellValue('C'.$fila, $rows['fecha']);
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ventas.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
