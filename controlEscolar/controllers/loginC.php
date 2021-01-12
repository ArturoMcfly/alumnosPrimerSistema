<?php
session_start();
include '../models/UsuarioM.php';
$usuario=new UsuarioM();

$nombre=$_POST['usuario'];
$pw=$_POST['pw'];
if($usuario->validaUsuario($nombre,$pw)){
    $_SESSION['usuario']=$nombre;
    header('Location: ../views/index.php');
}else{
    header('Location: ../views/login.php?err=1');
}
/*$usuarios;
$usuarios[0]="arthur";
$usuarios[1]="omar";
$usuarios[2]="miriam";

$contraseña;
$contraseña[0]=1234;
$contraseña[1]=3214;
$contraseña[2]=4567;


$nombre="";
$pw="";
$cont=0;
//if(isset($_GET['usuario'])&&isset($_GET['pw'])){//
if(isset($_POST['usuarios'])&&isset($_POST['pw'])){//el post te envia las variables al formulario de manera confidencial
$nombre=$_POST['usuarios'];
$pw=$_POST['pw'];
}
for($i=0;$i<3;$i++){
if($nombre==$usuarios[$i]&&$pw=$contraseña[$i]){
    header('Location: ../views/index.php');
}else{
    $cont++;
    
    //echo"incorrecto..";
    //header('Location: conexion.php?err=1');
}
}
if($cont==3){
    header('Location: ../views/login.php?err=1');
}*/
?>