<?php
require_once '../../models/Evento.php';

$evento = new Evento();

// ID del evento a eliminar (asegúrate de tener un evento con este ID en tu base de datos)
$id = 5;

if ($evento->eliminar($id)) {
    echo "Evento eliminado correctamente.";
} else {
    echo "Error al eliminar el evento.";
}
?>
