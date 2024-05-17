<?php
session_start();

$productos = array(
  array(
    'nombre' => 'Tapete de Yoga Antideslizante',
    'descripcion' => 'Tapete de yoga de alta calidad, antideslizante y cómodo.',
    'precio' => 29.99,
    'imagen' => 'tapete-yoga.jpg'
  ),
  array(
    'nombre' => 'Bloque de Yoga de Corcho',
    'descripcion' => 'Bloque de yoga ecológico y ligero, ideal para posturas de equilibrio.',
    'precio' => 12.99,
    'imagen' => 'bloque-yoga.jpg'
  ),
  array(
    'nombre' => 'Banda Elástica de Resistencia',
    'descripcion' => 'Banda elástica de resistencia para ejercicios de pilates y fortalecimiento.',
    'precio' => 9.99,
    'imagen' => 'banda-resistencia.jpg'
  ),
  array(
    'nombre' => 'Pelota de Pilates',
    'descripcion' => 'Pelota de pilates para mejorar la estabilidad y fortalecer el core.',
    'precio' => 14.99,
    'imagen' => 'pelota-pilates.jpg'
  ),
  array(
    'nombre' => 'Rueda de Yoga',
    'descripcion' => 'Rueda de yoga para mejorar la flexibilidad y aliviar la tensión muscular.',
    'precio' => 19.99,
    'imagen' => 'rueda-yoga.jpg'
  ),
  array(
    'nombre' => 'Bloque de Yoga de Espuma',
    'descripcion' => 'Bloque de yoga ligero y duradero, ideal para soportar posturas.',
    'precio' => 8.99,
    'imagen' => 'bloque-espuma.jpg'
  )
);

if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = array();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Tienda Online - Yoga y Pilates</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="img/lotus.png" type="image/x-icon">
</head>

<body>
  <header>
    <img src="img/lotus.png" height="100px" alt="...">
    <h1>Tienda Online - Yoga y Pilates</h1>
    <a href="carrito.php">Ver Carrito</a>
  </header>

  <main>
    <h2>Catálogo de Productos</h2>
    <div class="productos">
      <?php foreach ($productos as $producto) { ?>
        <div class="producto">
          <img src="img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
          <h3><?php echo $producto['nombre']; ?></h3>
          <p><?php echo $producto['descripcion']; ?></p>
          <p>Precio: $<?php echo $producto['precio']; ?></p>
          <form action="carrito.php" method="post">
            <input type="hidden" name="accion" value="agregar">
            <input type="hidden" name="producto" value="<?php echo $producto['nombre']; ?>">
            <button type="submit">Comprar</button>
          </form>
        </div>
      <?php } ?>
    </div>
  </main>

  <footer>
    <p>&copy; 2024 Tomás Moroño</p>
  </footer>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>