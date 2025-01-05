<?php
require_once '../../models/Evento.php';

$evento = new Evento();

// ID del evento a actualizar (asegúrate de tener un evento con este ID en tu base de datos)
$id = 5;
$titulo = "Conferencia de PHP Actualizada";
$fecha = "2024-12-31";
$hora = "11:00";
$categoria = "Tecnología";
$descripcion = "La conferencia ha sido reprogramada.";
$lugar = "Sala Principal";

if ($evento->actualizarEvento($id, $titulo, $fecha, $hora, $categoria, $descripcion, $lugar)) {
    echo "Evento actualizado correctamente.";
} else {
    echo "Error al actualizar el evento.";
}
?>
