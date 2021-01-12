<?php
session_start();
/*
include "../models/Operaciones.php";


$operacion=new Operaciones();
$operaciones=$_POST['ope'];
$numero1=$_POST['n1'];
$numero2=$_POST['n2'];
$resultado;
$r1=0;
if($operaciones=="suma"){
    $r1=$operacion->sumar($numero1,$numero2);
    $resultado="el resultado de: ".$numero1." + ".$numero2." = ".$r1;
}elseif($operaciones=="resta"){
    $r1=$operacion->restar($numero1,$numero2);
    $resultado="el resultado de: ".$numero1." - ".$numero2." = ".$r1;
} 
    elseif($operaciones=="multiplicacion"){
        $r1=$operacion->multiplicar($numero1,$numero2);
        $resultado="el resultado de: ".$numero1." * ".$numero2." = ".$r1;
    }
    elseif($operaciones=="division"){
        $r1=$operacion->dividir($numero1,$numero2);
        $resultado="el resultado de: ".$numero1." / ".$numero2." = ".$r1;
    }else{
        $resultado="tu opcion no es valida";
    }
    header("location:../views/login.php?res=".$resultado);
    */
    $n=$_POST['nombre'];
    if($n=="Omar"){
$_SESSION['nombre']=$n;
header("Location:../views/index.php");
    }else{
        header("Location:../views/login.php");
    }    
?>