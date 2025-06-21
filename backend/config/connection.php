<?php
function cargarEntorno($ruta = __DIR__ . '/../../.env') {
    if (!file_exists($ruta)) return;
    $variables = parse_ini_file($ruta);
    foreach ($variables as $key => $value) {
        putenv("$key=$value");
    }
}

cargarEntorno();

$host = getenv("DB_HOST");
$db = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa de la base de datos '$db'";
} catch (PDOException $e){
    echo ("Error de conexión: " . $e->getMessage());
}