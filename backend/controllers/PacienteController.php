<?php
require_once __DIR__ . '/../backend/models/PacienteModels.php';
require_once __DIR__ . '/../config/connection.php';

class PacienteController {
    Private $modelo;
    public function __construct(){
        global $conexion;
        $this->modelo = new Paciente($conexion);
    }

 public function index()
    {
        $pacientes = $this->modelo->obtenerDatos();
        header('Content-Type: application/json');
        echo json_encode($pacientes);
    }
}
