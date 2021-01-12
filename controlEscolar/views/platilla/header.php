<?php
session_start();
if(!isset($_SESSION['usuario'])){
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Inicio</title>
</head>
<body> 
<?php
echo"<h1> hola".$_SESSION['usuario']."</h1>";
?>
   <ul>
    <li><a href="index.php">Inicio</a>
    </li>
    <ul>
    <li><a href="Usuario.php">Usuario</a>
    </li>
    <ul>
    <li><a href="TipoUsuario.php">Cargos</a>
    </li>
    <li><a href="cerrarSession.php">Cerrar Session</a>
    </li>
    <li><a href="compra.php">compras</a>
    </li>
    <li><a href="compraE.php">comprasN</a>
    </li>
</ul>