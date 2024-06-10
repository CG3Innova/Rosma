<?php
// router.php

// Obtener la ruta solicitada
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Eliminar barra inicial
$request = trim($request, '/');

// Si la solicitud es para un archivo existente, devolverlo directamente
if (file_exists(__DIR__ . '/' . $request)) {
    return false;
}

// Si la solicitud está vacía, redirigir a index.php
if (empty($request)) {
    $request = 'index.php';
} else {
    // Agregar .php a la solicitud si no tiene una extensión
    if (pathinfo($request, PATHINFO_EXTENSION) === '') {
        $request .= '.php';
    }
}

// Verificar si el archivo solicitado existe
if (file_exists(__DIR__ . '/' . $request)) {
    include_once __DIR__ . '/' . $request;
} else {
    // Manejar el error 404 si el archivo no existe
    http_response_code(404);
    include_once __DIR__ . '/404.php';
}
?>