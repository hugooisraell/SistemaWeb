<?php
// index.php

// Incluye el controlador de eventos
require_once __DIR__ . '/controllers/EventoController.php';

// Crea una instancia del controlador de eventos
$controller = new EventosController();

// Verifica si se ha enviado una accion en la URL
if (isset($_GET['action'])) {
    // almacena el valor de la accion
    $action = $_GET['action'];

    if ($action == 'agregar') {
        // Muestra el formulario para agregar un evento
        $controller->mostrarFormularioAgregar();
    } elseif ($action == 'guardar') {
        // Llama al metodo para guardar el evento
        $controller->agregar();
    } elseif ($action == 'editar') {
        // llama al metodo para editar un evento
        $id = $_GET['id'];
        $controller->mostrarFormularioEditar($id);
    } elseif ($action == 'actualizar') {
        // Llama al método para actualizar el evento con el ID especificado
        $id = $_GET['id'];
        $controller->editar($id);
    } elseif ($action == 'eliminar') {
        // Llama al método para eliminar el evento con el ID especificado
        $id = $_GET['id'];
        $controller->eliminar($id);
    } else {
        // Si la acción no coincide, redirige a la lista de eventos
        $controller->index();
    }
} else {
    // Si no se especifica ninguna acción, muestra la lista de eventos
    $controller->index();
}
