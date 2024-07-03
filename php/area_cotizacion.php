<?php

define('FPDF_FONTPATH', '../lib/fpdf/font/');
require('../lib/fpdf/fpdf.php');

if (isset($_POST['submit_cotizacion'])) {
    $destino = $_POST['destino'] . "<br>";
    $fecha_inicio = $_POST['fecha_inicio'] . "<br>";
    $fecha_fin = $_POST['fecha_fin'] . "<br>";
    $caantidad_personas = $_POST['cantidad_personas'] . "<br>";
    echo "Funciona";

    $pdf = new FPDF('P', 'mm', 'A4');

    $pdf->AddPage(); // Agregar una página

    // Agregar una imagen en el centro de la página
    $pdf->Cell(0, 10, $pdf->Image('../assets/img/logo.png', 93, 10, 22, 25), 0, 0, 'C');
    $pdf->Ln(25);
    $pdf->SetFont('Courier', 'BIU', 14);

    // Crear una celda, se especifica el ancho, alto, texto, borde, salto de línea y alineación del texto
    $pdf->Cell(190, 20, 'LISTADO DE CEDULAS', 0, 1, 'C');

    // Salto de linea
    //$pdf->Ln(1);
    $pdf->SetFont('Times', 'B', 12);
    $pdf->Cell(62, 20, 'No', 0, 0, 'C');
    $pdf->Cell(62, 20, 'Cedula', 0, 0, 'C');
    $pdf->Cell(62, 20, 'Nombre', 0, 0, 'C');


    // Establecer el tamaño de la fuente
    $pdf->SetFont('Times', '', 12);


    // Un pie de página con el número de página y la fecha en que se genera
    $pdf->SetFont('Times', '', 8);
    $pdf->Cell(0, 10, 'Pagina ' .   $pdf->PageNo() . '   ' . date('d-m-Y H:i:s'), 0, 0, 'C');

    // Descargar el documento  
    $pdf->Output('cedulas.pdf', 'D');
}
