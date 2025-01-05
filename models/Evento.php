<?php
// models/Evento.php

// Incluye el archivo de configuración para usar la función conectarDB()
require_once __DIR__ . '/../config/conexion.php';

class Evento {
    // Propiedad para almacenar la conexión a la base de datos
    private $conexion;

    // Constructor de la clase Evento, establece la conexión a la base de datos
    public function __construct() {
        $this->conexion = conectarDB();
    }

    // Método para obtener todos los eventos de la base de datos
    public function obtenerEventos() {
        // Consulta SQL para seleccionar todos los registros de la tabla eventos
        $sql = "SELECT * FROM eventos";
        // Ejecuta la consulta
        $resultado = $this->conexion->query($sql);

        // Retorna todos los registros como un array asociativo
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // Método para agregar un evento
    public function agregar($titulo, $fecha, $hora, $categoria, $descripcion, $lugar) {
        // Consulta SQL con placeholders para evitar inyección SQL
        $sql = "INSERT INTO eventos (titulo, fecha, hora, categoria, descripcion, lugar) VALUES (?, ?, ?, ?, ?, ?)";
        // Prepara la consulta para su ejecución
        $stmt = $this->conexion->prepare($sql);
        // Vincula los valores a los placeholders
        $stmt->bind_param('ssssss', $titulo, $fecha, $hora, $categoria, $descripcion, $lugar);
        // Ejecuta la consulta y retorna el resultado (true o false)
        return $stmt->execute();
    }

    // Método para obtener un evento por su ID
    public function obtenerPorId($id) {
        // Consulta SQL para seleccionar un evento según su ID
        $sql = "SELECT * FROM eventos WHERE id = ?";
        // Prepara la consulta
        $stmt = $this->conexion->prepare($sql);
        // Vincula el ID al placeholder
        $stmt->bind_param('i', $id);
        // Ejecuta la consulta
        $stmt->execute();
        // Retorna el resultado como un array asociativo
        return $stmt->get_result()->fetch_assoc();
    }

    // Método para actualizar un evento
    public function actualizarEvento($id, $titulo, $fecha, $hora, $categoria, $descripcion, $lugar) {
        // Consulta SQL para actualizar un evento según su ID
        $sql = "UPDATE eventos SET titulo = ?, fecha = ?, hora = ?, categoria = ?, descripcion = ?, lugar = ? WHERE id = ?";
        // Prepara la consulta
        $stmt = $this->conexion->prepare($sql);
        // Vincula los valores al placeholder
        $stmt->bind_param('ssssssi', $titulo, $fecha, $hora, $categoria, $descripcion, $lugar, $id);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute();
    }

    // Método para eliminar un evento
    public function eliminar($id) {
        // Consulta SQL para eliminar un evento según su ID
        $sql = "DELETE FROM eventos WHERE id = ?";
        // Prepara la consulta
        $stmt = $this->conexion->prepare($sql);
        // Vincula el ID al placeholder
        $stmt->bind_param('i', $id);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute();
    }
}
?>
