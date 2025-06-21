<?php
require_once __DIR__ . '/../backend/config/connection.php';

class Paciente {
    private $conexion;
    public function __contruct($conexion){
        $this->conexion= $conexion;
    }

    public function obtenerDatos(){
        $sql = "SELECT * FROM paciente";
        $query = $this->conexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}


