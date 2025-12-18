<?php
// index.php (controlador de rutas)

// Cargar el controlador de libros
require_once 'controllers/LibroController.php';

// Crear instancia del controlador
$controller = new LibroController();

// Determinar acción solicitada (por defecto: index)
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Enrutamiento
switch ($action) {
    case 'index':
        $controller->index();      // Listar libros
        break;

    case 'create':
        $controller->create();     // Crear libro
        break;

    case 'edit':
        $controller->edit();       // Editar libro
        break;

    case 'delete':
        $controller->delete();     // Eliminar libro
        break;

    default:
        $controller->index();      // Acción por defecto
        break;
}
