<?php

define('FPDF_FONTPATH', '../lib/fpdf/font/');
require('../lib/fpdf/fpdf.php');
include '../admin/db/conexion.php';


if (isset($_POST['submit_cotizacion'])) {

    $destino = intval($_POST['id_destino']); // Obtener el id de destino
    $fechas = $_POST['fechaText']; // Obtener la fecha de inicio
    $cantidad_personas = intval($_POST['cantidad_personas']); // Obtener la fecha de fin
    $precio = $_POST['precio']; // Obtener la cantidad de personas

    // Validar que todos los datos del formulario esten completos y sean correctos
    if(empty($fechas) || empty($cantidad_personas) || empty($precio)){
        header('Location: ../index.php');
    }

    // Variables para almacenar datos
    $nombre_destino = ''; // Variable para almacenar el nombre del destino
    $precio_total = 0; // Variable para almacenar el precio total

    // Consulta para obtener el nombre del destino
    $sql = "SELECT * FROM destinos WHERE id_destino = '$destino'";
    $resultado = $conexion->query($sql); // Ejecutar la consulta

    if($resultado->num_rows > 0) { // Verificar si hay resultados
        $datos_destino = $resultado->fetch_assoc(); // Obtener el resultado
        $nombre_destino = $datos_destino['nombre_destino']; // Obtener el nombre del destino
    }

    $precio_total = $precio * $cantidad_personas; // Calcular el precio total

    class PDF extends FPDF {
        // Header
        function Header() {
            $this->SetFont('Arial', 'B', 23);
            $this->Cell(0, 10, utf8_decode('Agencia de viajes'), 0, 1, 'C');
            $this->Cell(0, 10, utf8_decode('Conoce Panamá'), 0, 1, 'C');
            $this->Ln(10);

            $this->SetFont('Arial', 'U', 16);
            $this->Cell(0, 10, utf8_decode('Cotización de Viajes'), 0, 1, 'L');
        }
    
        // Footer
        function Footer() {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
        }
    
        // Table
        function Table($header, $data) {
            // Header
            $this->SetFont('Arial', 'B', 12);
            foreach($header as $col) {
                $this->Cell(44, 7, $col, 1);
            }
            $this->Ln();
            
            // Data
            foreach($data as $row) {
                $this->SetFont('Arial', '', 10);
                foreach($row as $col) {
                    $this->Cell(44, 6, $col, 1);
                }
                $this->Ln();
            }
        }
    }
    
    // Data
    $header = array('Destino', 'Cant. Persona', utf8_decode('Estadía'), 'Precio');
    $data = array(
        array(utf8_decode($nombre_destino), $cantidad_personas, $fechas, 'B/. '. $precio_total),
    );
    
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->Table($header, $data);
    $pdf->Output();
}
