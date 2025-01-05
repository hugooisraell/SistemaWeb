<?php
require_once '../config/conexion.php';

$conexion = conectarDB();
if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error al conectar a la base de datos.";
}
?>
