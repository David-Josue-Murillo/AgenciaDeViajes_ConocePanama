<?php

include_once '../../vendor/autoload.php';
include_once '../db/conexion.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Crear nuevo objeto de PHPSpreadsheet
$spreadsheet = new Spreadsheet();
$spreadsheet->getProperties()
    ->setCreator("David Murillo")
    ->setTitle("Reporte de usuarios")
    ->setLastModifiedBy("David Murillo")
    ->setSubject("Reporte de usuarios")
    ->setDescription("Reporte de usuarios");

// Establecer la hoja activa
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Usuarios');

// Obtener la fecha y hora actual
$fecha = date('d/m/Y');
$hora = date('h:i:s A');

// Agregar encabezado nombre de la empresa y la fecha y hora
$sheet->setCellValue('A1', 'Nombre de la empresa:')->getStyle('A1')->getFont()->setBold(true);
$sheet->setCellValue('B1', 'Conoce Panama');

$sheet->setCellValue('A2', 'Fecha:')->getStyle('A1')->getFont()->setBold(true);
$sheet->setCellValue('B2', $fecha);

$sheet->setCellValue('A3', 'Hora:')->getStyle('A2')->getFont()->setBold(true);
$sheet->setCellValue('B3', $hora);

// Encabezados de la tabla usuarios
$sheet->setCellValue('A5', 'Nombre')->getStyle('A4')->getFont()->setBold(true);
$sheet->setCellValue('B5', 'Apellido')->getStyle('B4')->getFont()->setBold(true);
$sheet->setCellValue('C5', 'Telefono')->getStyle('C4')->getFont()->setBold(true);
$sheet->setCellValue('D5', 'Email')->getStyle('D4')->getFont()->setBold(true);

// Leer los datos de la tabla usuarios
$sql = "SELECT * FROM usuarios";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $rowNumber = 6; // Comenzar después de los encabezados
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNumber, $row['nombre']);
        $sheet->setCellValue('B' . $rowNumber, $row['apellido']);
        $sheet->setCellValue('C' . $rowNumber, $row['telefono']);
        $sheet->setCellValue('D' . $rowNumber, $row['email']);
        $rowNumber++;
    }
}

// Preparar el archivo para descarga
$filename = "reporte-usuarios.xlsx";

// Redirigir para descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

// Crear el archivo Excel
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

// Terminar el script
exit();
?>
