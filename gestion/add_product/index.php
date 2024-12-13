<?php
include '../../server.php';
$conexion = new mysqli("127.0.0.1", "root", "", "productos_belleza");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $imagen = $_POST['imagen'];

    $sql = "INSERT INTO productos (nombre, descripcion, precio, cantidad, imagen) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssdss", $nombre, $descripcion, $precio, $cantidad, $imagen);
    $stmt->execute();

    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Agregar Producto</h1>
            <a href="../index.php"> &lt; Volver</a>
        </div>
        <form action="index.php" method="POST">
            <div class="container-info">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
            </div>
            <br>
            <div class="container-info">
                <label for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" required>
            </div>
            <br>
            <div class="container-info">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" name="precio" required>
            </div>
            <br>
            <div class="container-info">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" required>
            </div>
            <br>
            <div class="container-info">
                <label for="imagen">Imagen (URL):</label>
                <input type="text" name="imagen">
            </div>
            <br>
            <button type="submit">Agregar Producto</button>
        </form>
    </div>

</body>

</html>