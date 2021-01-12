<?php
//funciones de sesiones
session_start();//puesto que la sesion ya esta iniciada no hara nada
function crearSesion($id,$usuario){
    $_SESSION['id']=$id;
    $_SESSION['usuario']=$usuario;

}
if(isset($_GET['Salir'])){
    session_unset($_SESSION['id']);//liberarán las variables de sesión registradas, en el ejemplo 
    //liberamos dos variables de sesión

    session_unset($_SESSION['cargo']);
    session_destroy(); //libera la sesión actual, elimina cualquier dato de la sesión.
    echo'<SCRIPT LANGUAGE="javascript">
    location.href="index.php";
    </SCRIPT>';
}
?>
/*session_start();

if(!isset($_SESSION['name'])){
    //no existe session
    echo"No existe session";
}else{
    echo $_SESSION['name'];
}

$crear_sesion=$_GET['sesion'];
if($crear_sesion=="on"){
    $_SESSION['name']="sesion Creada";

}else{
    session_destroy();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio de Sesion con PHP</title>
</head>

<body>
<a href="?sesion=on">Crear Sesion</a> / <a href="?sesion=off">destruir Sesion</a>
</body>
</html>


