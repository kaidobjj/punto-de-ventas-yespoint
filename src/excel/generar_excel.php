<?php
require_once '../../conexion.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$fecha = $mysqli->mysqli_real_escape_string($_POST['fecha']);
$id_usuario = $mysqli->mysqli_real_escape_string($_POST['id_usuario']);


$config = "SELECT * FROM ventas where fecha LIKE '$fecha' AND seccion LIKE  '$id_usuario'";
$resultado = $conexion->query($config);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("cliente");

$hojaActiva->getColumnDimension('A')->setWidth(10);
$hojaActiva->setCellValue('A1', 'id_cliente');
$hojaActiva->getColumnDimension('B')->setWidth(30);
$hojaActiva->setCellValue('B1', 'total');
$hojaActiva->getColumnDimension('C')->setWidth(20);
$hojaActiva->setCellValue('C1', 'id_usuario');
$hojaActiva->getColumnDimension('D')->setWidth(35);
$hojaActiva->setCellValue('D1', 'fecha');

$fila = 2;
while ($rows = $resultado->fetch_assoc()) {

    $hojaActiva->setCellValue('A'.$fila, $rows['id_cliente']);
    $hojaActiva->setCellValue('B'.$fila, $rows['total']);
    $hojaActiva->setCellValue('C'.$fila, $rows['id_usuario']);
    $hojaActiva->setCellValue('D'.$fila, $rows['fecha']);
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ventas.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
