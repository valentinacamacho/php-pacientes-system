<?php
class PacienteModels {
    private $conexion;
    public function __construct($conexion){
      if(!$conexion){
          die("Error: No recibió la conexcion de PacienteModels");
      }
    
        $this->conexion= $conexion;
    }

   public function obtenerDatos() {
        $sql = "SELECT * FROM paciente";
        $query = $this->conexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function obtenerPorId($id) {
        $sql = "SELECT * FROM paciente WHERE id = :id";
        $query = $this->conexion->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}


