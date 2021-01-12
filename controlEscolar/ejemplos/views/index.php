<?php
session_start();
$_SESSION['nombre']="Omar";
if(!isset($_SESSION['nombre'])){
   header("Location:.. login.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <title></title>
</head>
<body>
<a href="cerrarSession.php">Cerrar Session</a>
<?php
echo"<h1> hola".$_SESSION['nombre']."</h1>";
?>    
</body>
</html>