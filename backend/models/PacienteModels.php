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
    public function insertarPaciente($registerData){
      $sql = "INSERT INTO paciente (
                tipo_documento_id, numero_documento, nombre1, nombre2,
                apellido1, apellido2, genero_id, departamento_id, municipio_id, correo
            ) VALUES (
                :tipo_documento_id, :numero_documento, :nombre1, :nombre2,
                :apellido1, :apellido2, :genero_id, :departamento_id, :municipio_id, :correo
            )";
            $query=$this->conexion->prepare($sql);
            return $query->execute([
              ':tipo_documento_id' => $registerData['tipo_documento_id'],
              ':numero_documento' => $registerData ['numero_documento'],
              ':nombre1' => $registerData['nombre1'],
              ':nombre2' => $registerData['nombre2'],
              ':apellido1' => $registerData['apellido1'],
              ':apellido2' => $registerData['apellido2'],
              ':genero_id' => $registerData['genero_id'],
              ':departamento_id' => $registerData ['departamento_id'],
              ':municipio_id' => $registerData['municipio_id'],
              ':correo' => $registerData['correo']
            ]);
    }

    public function actualizarPaciente($id, $registerData) {
        $sql = "UPDATE paciente SET
    tipo_documento_id = :tipo_documento_id,
    numero_documento = :numero_documento,
    nombre1 = :nombre1,
    nombre2 = :nombre2,
    apellido1 = :apellido1,
    apellido2 = :apellido2,
    genero_id = :genero_id,
    departamento_id = :departamento_id,
    municipio_id = :municipio_id,
    correo = :correo
    WHERE id = :id";  

$stmt = $this->conexion->prepare($sql);

return $stmt->execute([
    ':tipo_documento_id' => $registerData['tipo_documento_id'],
    ':numero_documento' => $registerData['numero_documento'],
    ':nombre1' => $registerData['nombre1'],
    ':nombre2' => $registerData['nombre2'],
    ':apellido1' => $registerData['apellido1'],
    ':apellido2' => $registerData['apellido2'],
    ':genero_id' => $registerData['genero_id'],
    ':departamento_id' => $registerData['departamento_id'],
    ':municipio_id' => $registerData['municipio_id'],
    ':correo' => $registerData['correo'],
    ':id' => $id 
]);
    } 
}


