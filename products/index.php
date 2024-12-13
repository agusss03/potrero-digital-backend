<?php
include '../server.php';
$productos = obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Productos de Belleza</title>
</head>

<body>
    <header>
        <h1>Productos de Belleza</h1>
        <nav>
            <ul>
                <li><a href="../login/index.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main">
            <h2>Nuestros Productos</h2>
            <div class="product-container">
                <div class="product-grid">
                    <?php foreach ($productos as $producto): ?>
                    <div class="product-card">
                        <img src="<?= $producto['imagen']; ?>" alt="<?= $producto['nombre']; ?>">
                        <div class="information-product-container">
                            <h3><?= $producto['nombre']; ?></h3>
                            <p class="price">$<?= number_format($producto['precio'], 2); ?></p>
                            <button class="btn-primary">Añadir al Carrito</button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Productos de Belleza. Todos los derechos reservados.</p>
    </footer>
</body>

</html>