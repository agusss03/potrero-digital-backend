<?php
include '../server.php';

// Eliminar un producto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM productos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error al eliminar el producto.";
    }
}

$productos = obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container" style="flex-direction:column">
        <div class="header">
            <h1>Gestión de Productos</h1>
            <a href="../products/index.php">Inicio</a>
        </div>
        <table class="product-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                            <div class="product-name-description">
                                <p class="product-name"><?= $producto['nombre'] ?></p>
                                <p class="product-description"><?= $producto['descripcion'] ?></p>
                            </div>
                        </div>
                    </td>
                    <td>$<?= number_format($producto['precio'], 2) ?></td>
                    <td><?= $producto['cantidad'] ?></td>
                    <td>$<?= number_format($producto['precio'] * $producto['cantidad'], 2) ?></td>
                    <td>
                        <a href="edit_product/index.php?id=<?= $producto['id'] ?>" class="edit-btn">✏</a>
                    </td>
                    <td>
                        <form action="index.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                            <button type="submit" name="delete" class="delete-btn">✖</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="header" style="margin-top: 3rem; margin-bottom: 1rem;">
            <a href="add_product/index.php">Agregar Producto</a>
        </div>
    </div>
</body>

</html>