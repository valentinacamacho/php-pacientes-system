<?php
require_once __DIR__ . '/../models/PacienteModels.php';
require_once __DIR__ . '/../config/connection.php';

class PacienteController {
    private $modelo;

    public function __construct(){
        global $conexion;
        $this->modelo = new PacienteModels($conexion);
    }

    public function index(){
        $pacientes = $this->modelo->obtenerDatos();
        header('Content-Type: application/json');
        echo json_encode($pacientes);
    }

    public function show($id) {
      $pacientes = $this->modelo->obtenerPorId($id);
      header('Content-Type: application/json');
    }


}

