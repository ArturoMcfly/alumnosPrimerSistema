<?php
include "../models/Operaciones.php";
$metodo=new Operaciones();
$x2=$_POST['x2'];
$x=$_POST['x'];
$n=$_POST['n'];
$resultado=$metodo->fGen($x2,$x,$n);

header("location:../views/login.php?res=".$resultado);
?>