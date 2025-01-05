<?php
require_once '../../models/Evento.php';

$evento = new Evento();

// Obtener todos los eventos
$eventos = $evento->obtenerEventos();

if (count($eventos) > 0) {
    foreach ($eventos as $e) {
        echo "ID: " . $e['id'] . "<br>";
        echo "Título: " . $e['titulo'] . "<br>";
        echo "Fecha: " . $e['fecha'] . "<br>";
        echo "Hora: " . $e['hora'] . "<br>";
        echo "Categoría: " . $e['categoria'] . "<br>";
        echo "Descripción: " . $e['descripcion'] . "<br>";
        echo "Lugar: " . $e['lugar'] . "<br><br>";
    }
} else {
    echo "No se encontraron eventos.";
}
?>
