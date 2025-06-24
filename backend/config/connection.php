<?php
$dotenv = parse_ini_file(__DIR__ . '/../.env');

$host = $dotenv['DB_HOST'];
$db = $dotenv['DB_NAME'];
$user = $dotenv['DB_USER'];
$pass = $dotenv['DB_PASS'];

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db; charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Conectando a $db en $host como $user";
} catch (PDOException $e) {
    die(" Error de conexión: " . $e->getMessage());
}
?>