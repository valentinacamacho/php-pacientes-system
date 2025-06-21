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
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


