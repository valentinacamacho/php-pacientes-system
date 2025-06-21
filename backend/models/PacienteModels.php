<?php
require_once __DIR__ . '/../backend/config/connection.php';

class Paciente {
    private $conexion;
    public function __contruct($conexion){
        $this->conexion= $conexion;
    }
}

