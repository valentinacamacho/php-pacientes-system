<?php
require_once __DIR__ . '/../controllers/PacienteController.php';

$controller = new PacienteController();

if(isset($_GET['id'])){
    $controller->show($_GET['id']);
}else{
$controller->index();
}
