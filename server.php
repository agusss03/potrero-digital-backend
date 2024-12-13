<?php
// Configuración de la base de datos
$host = '127.0.0.1';
$db = 'productos_belleza';  // Nombre de la base de datos
$user = 'root';
$pass = '';

try {
    // Establecer conexión con la base de datos
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Conexión fallida: ' . $e->getMessage();
}

function obtenerProductos() {
    global $pdo;
    $sql = "SELECT * FROM productos";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>