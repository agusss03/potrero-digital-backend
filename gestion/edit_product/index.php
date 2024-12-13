<?php
include '../../server.php';
$conexion = new mysqli("127.0.0.1", "root", "", "productos_belleza");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id = $_GET['id'] ?? null;

if ($id !== null) {
    $sql = "SELECT * FROM productos WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $producto = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $producto) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $sql_update = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, cantidad = ? WHERE id = ?";
    $stmt_update = $conexion->prepare($sql_update);
    $stmt_update->bind_param("ssdii", $nombre, $descripcion, $precio, $cantidad, $id);
    $stmt_update->execute();

    header("Location: ../index.php");
    exit;
}

if (!$producto) {
    echo "Producto no encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Editar Producto</h1>
            <a href="../index.php">&lt; Volver</a>
        </div>
        <form method="post">
            <div class="container-info">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?= $producto['nombre'] ?>" required>
            </div>
            <div class="container-info">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" required><?= $producto['descripcion'] ?></textarea>
            </div>
            <div class="container-info">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" value="<?= $producto['precio'] ?>" step="0.01" required>
            </div>
            <div class="container-info">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" value="<?= $producto['cantidad'] ?>" required>
            </div>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>

</html>