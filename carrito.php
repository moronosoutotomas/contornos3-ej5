<?php
session_start();

$productos = array(
  // Mismo array de productos que en index.php
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $accion = $_POST['accion'];
  $producto = $_POST['producto'];

  if ($accion === 'agregar') {
    if (isset($_SESSION['carrito'][$producto])) {
      $_SESSION['carrito'][$producto]['cantidad']++;
    } else {
      $_SESSION['carrito'][$producto] = array(
        'cantidad' => 1,
        'precio' => $productos[array_search($producto, array_column($productos, 'nombre'))]['precio']
      );
    }
  } elseif ($accion === 'eliminar') {
    unset($_SESSION['carrito'][$producto]);
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="img/lotus.png" type="image/x-icon">
</head>

<body>
  <header>
    <h1>Carrito de Compras</h1>
    <a href="index.php">Volver al Catálogo</a>
  </header>

  <main>
    <h2>Productos en el Carrito</h2>
    <div class="carrito">
      <?php if (empty($_SESSION['carrito'])) { ?>
        <p>El carrito está vacío.</p>
      <?php } else { ?>
        <table>
          <thead>
            <tr>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Precio Unitario</th>
              <th>Total</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $total = 0;
            foreach ($_SESSION['carrito'] as $nombre => $producto) {
              $subtotal = $producto['cantidad'] * $producto['precio'];
              $total += $subtotal;
              ?>
              <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $producto['cantidad']; ?></td>
                <td>$<?php echo number_format($producto['precio'], 2); ?></td>
                <td>$<?php echo number_format($subtotal, 2); ?></td>
                <td>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="accion" value="eliminar">
                    <input type="hidden" name="producto" value="<?php echo $nombre; ?>">
                    <button type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3" class="total-label">Total:</td>
              <td class="total-amount">$<?php echo number_format($total, 2); ?></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      <?php } ?>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 Tienda Online - Yoga y Pilates</p>
  </footer>
</body>

</html>