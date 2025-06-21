<?php
require_once __DIR__ . '/../backend/models/PacienteModels.php';

class PacienteController {
    Private $modelo;
    public function __construct(){
        global $conexion;
        $this->modelo = new Paciente($conexion);
    }

}
