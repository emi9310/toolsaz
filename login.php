<?php
// Inicio de sesión
session_start();

// Verificación de datos de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Verificar usuario y contraseña
  $username = 'admin';
  $password = 'admin';

  if ($_POST['username'] === $username && $_POST['password'] === $password) {
    // Iniciar sesión y redirigir al usuario a la página de inicio
    $_SESSION['loggedin'] = true;
    header('Location: index.html');
    exit;
  } else {
    // Mostrar mensaje de error
    echo 'Usuario o contraseña incorrectos.';
  }
}
?>
