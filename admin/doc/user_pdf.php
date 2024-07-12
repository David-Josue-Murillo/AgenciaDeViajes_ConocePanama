<?php

define('FPDF_FONTPATH', '../../lib/fpdf/font/');
include_once '../../lib/fpdf/fpdf.php';
include_once '../db/conexion.php';

// Consulta para obtener los datos de la tabla usuarios
$sql = "SELECT * FROM usuarios";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $usuarios = array();
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}

// Ruta del logo
$ruta_log = "../../assets/img/logo.png";

// Diseño del PDF
class PDF extends FPDF {
    // Encabezado
    function Header() {
        global $ruta_log;
        // Logo
        $this->Image($ruta_log, 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(45, 20, 'Reporte de Usuarios - Conoce Panama', 0, 0, 'C');
        // Salto de línea
        $this->Ln(25);

        // Fecha y hora del sistema
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(30, 10, 'Fecha: ', 0, 0, 'L');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, date('d/m/Y'), 0, 1, 'L');

        $this->SetFont('Arial', 'B', 12);
        $this->Cell(30, 10, 'Hora: ', 0, 0, 'L');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, date('h:i:s A'), 0, 1, 'L');

        $this->Ln(5);
    }

    // Pie de página
    function Footer() {
        // Posición a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }

    // Contenido
    function ChapterTitle($num, $label) {
        // Arial 12
        $this->SetFont('Arial', '', 12);
        // Color de fondo
        $this->SetFillColor(200, 220, 255);
        // Título
        $this->Cell(0, 10, "Capítulo $num : $label", 0, 1, 'L', true);
        // Salto de línea
        $this->Ln(4);
    }

    function ChapterBody($body) {
        // Leer archivo de texto
        $txt = $body;
        // Times 12
        $this->SetFont('Times', '', 12);
        // Imprimir texto
        $this->MultiCell(0, 10, $txt);
        // Salto de línea
        $this->Ln();
        // Mencion en cursiva
        $this->SetFont('', 'I');
    }

    function PrintChapter($num, $title, $file) {
        $this->AddPage();
        $this->ChapterTitle($num, $title);
        $this->ChapterBody($file);
    }
}

// Creación del objeto PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Encabezados de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Nombre', 1);
$pdf->Cell(40, 10, 'Apellido', 1);
$pdf->Cell(40, 10, 'Telefono', 1);
$pdf->Cell(70, 10, 'Email', 1);
$pdf->Ln();

// Contenido de la tabla
$pdf->SetFont('Arial', '', 12);
foreach ($usuarios as $usuario) {
    $pdf->Cell(40, 10, $usuario['nombre'], 1);
    $pdf->Cell(40, 10, $usuario['apellido'], 1);
    $pdf->Cell(40, 10, $usuario['telefono'], 1);
    $pdf->Cell(70, 10, $usuario['email'], 1);
    $pdf->Ln();
}

// Salida del PDF
$pdf->Output();
?>
