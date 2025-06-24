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

      if ($pacientes) {
        echo json_encode($pacientes);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Paciente no encontrado']);
    }
    }

    public function store(){
      $registerData =json_decode(file_get_contents("php://input"), true);

      if(!$registerData) {
        http_response_code(400);
        echo json_encode(["error" => "Datos invalidos o faltantes"]);
        return;
      }

      $resultado = $this->modelo->insertarPaciente($registerData);

      if($resultado) {
        http_response_code(201);
        echo json_encode(["mensaje" => "Paciente registrado con éxito."]);
      } else {
        http_response_code(500);
        echo json_encode(["error " => "No se pudo insertar el paciente."]);
      }
    }

    public function update($id) {
      $registerData = json_decode(file_get_contents("php://input"), true);

      if (!$registerData){
        http_response_code(400);
        echo json_encode(["error" => "Datos inválidos o faltantes"]);
        return;
      }

      $resultado = $this->modelo->actualizarPaciente($id, $registerData);

      if($resultado) {
        echo json_encode(["mensaje" => "Paciente actualizado con éxito."]);
      } else {
        http_response_code(500);
        echo json_encode(["error" => "Error al actualizar el paciente"]);
      }

    }

}

