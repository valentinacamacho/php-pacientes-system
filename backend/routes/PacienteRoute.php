<?php
require_once __DIR__ . '/../controllers/PacienteController.php';

$controller = new PacienteController();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id'])) {
            $controller->show($_GET['id']);
        } else {
            $controller->index();
        }
        break;

    case 'POST':
        $controller->store();
        break;

    case 'PUT':
        if (isset($_GET['id'])) {
            $controller->update($_GET['id']);
        } else {
            http_response_code(400);
            echo json_encode(["Error" => "Se requiere ID para actualizar"]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
        break;
}
