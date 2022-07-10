<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
include 'conn.php';
include 'global/conexion.php';
?>


<?php
session_start();
session_unset($_SESSION['email']);
session_destroy();

header('location: login.php');
?>