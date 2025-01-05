<?php
// Incluye la clase Evento
require_once '../../models/Evento.php';

// Crea una instancia de la clase Evento
$evento = new Evento();

// Llama al método agregar con datos de prueba
$titulo = "CSS en Diseño web";
$fecha = "2024-12-28";
$hora = "10:00";
$categoria = "Tecnología";
$descripcion = "Una conferencia sobre diseño web con CSS";
$lugar = "Aula Virtual";

// Intenta agregar el evento
if ($evento->agregar($titulo, $fecha, $hora, $categoria, $descripcion, $lugar)) {
    echo "Evento agregado exitosamente.";
} else {
    echo "Error al agregar el evento.";
}
?>
