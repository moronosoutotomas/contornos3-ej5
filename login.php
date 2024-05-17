<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
    if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
      if ($_POST['correo'] == "admin@admin.com" && $_POST['contraseña'] == "admin") {
        header("Location: tienda.php");
        exit();
      } else {
        header("Location: auth-failure.php");
      }
    } else {
      header("Location: auth-failure.php");
    }
  } else {
    header("Location: auth-failure.php");
  }
} else {
  header("Location: auth-failure.php");
}
