<?php
// controllers/EventoController.php

// Incluye el modelo Evento para acceder a sus métodos
require_once __DIR__ . '/../models/Evento.php';

class EventosController {
    // Propiedad para almacenar la instancia del modelo Evento
    private $evento;

    // Constructor que crea una instancia del modelo Evento
    public function __construct() {
        $this->evento = new Evento();
    }

    // Método para mostrar la lista de eventos
    public function index() {
        // Llama al método obtenerEventos() para obtener todos los eventos
        $eventos = $this->evento->obtenerEventos();
        // Incluye la vista para listar los eventos
        require_once __DIR__ . '/../views/lista_eventos.php';
    }

    // Método para mostrar el formulario de agregar evento
    public function mostrarFormularioAgregar() {
        // Incluye la vista para agregar un evento
        require_once __DIR__ . '/../views/agregar_evento.php';
    }

    // Método para manejar la creación de un nuevo evento
    public function agregar() {
        // Obtiene los datos del formulario
        $titulo = $_POST['titulo'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $lugar = $_POST['lugar'];

        // Llama al método agregar() para agregar el evento
        $this->evento->agregar($titulo, $fecha, $hora, $categoria, $descripcion, $lugar);
        
        // Redirige a la lista de eventos
        header('Location: ./index.php');
    }

    // Método para mostrar el formulario de edición
    public function mostrarFormularioEditar($id) {
        // Llama al método obtenerPorId() para obtener los datos del evento
        $evento = $this->evento->obtenerPorId($id);
        // Incluye la vista para editar el evento
        require_once __DIR__ . '/../views/editar_evento.php';
    }

    // Método para actualizar un evento
    public function editar($id) {
        // Obtiene los datos del formulario
        $titulo = $_POST['titulo'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $lugar = $_POST['lugar'];

        // Llama al método actualizarEvento() para guardar los cambios
        $this->evento->actualizarEvento($id, $titulo, $fecha, $hora, $categoria, $descripcion, $lugar);
        
        // Redirige a la lista de eventos
        header('Location: ./index.php');
    }

    // Método para eliminar un evento
    public function eliminar($id) {
        // Llama al método eliminar() para borrar el evento
        $this->evento->eliminar($id);
        
        // Redirige a la lista de eventos
        header('Location: ./index.php');
    }
}
