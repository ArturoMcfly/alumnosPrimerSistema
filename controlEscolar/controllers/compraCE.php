<?php
include "../models/ComprasME.php";
$obj=new ComprasME();
$n=$_POST['producto'];
$c=$_POST['cantidad'];
$e=$_POST['efectivo'];
if($n==''||$n==null||$c==''||$c==null||$e==''||$e==null){
    header('Location: ../views/compraE.php?err=0');
}else{
    $comprobar=$obj->buscaProducto($n);
    $id='';
    $comprobarP='';
    $cantidad='';
    $precio='';
    foreach ($comprobar as $row){
        $comprobarP=$row['nombre'];
        $cantidad=$row['cantidad'];
        $precio=$row['precio'];
        $id=$row['id_p'];
       }
    if($comprobar==null){
        header('Location: ../views/compraE.php?err=1');   
    }
    else{
        if($cantidad=='0'){
            header('Location: ../views/compraE.php?err=2');  
        }else{
            if($cantidad<$c){
                header('Location: ../views/compraE.php?err=3');  
            }else{
                $total=$c*$precio;
                if($e<$total){
                    header('Location: ../views/compraE.php?err=4'); 
                }else{
                    $nc=$cantidad-$c;
                    $cambio=$e-$total;
                    echo $nc;
                    echo $cambio;
                    $venta=$obj->venta($id,$c,$e,$cambio,$total);
                    $act=$obj->act($id,$n,$nc,$precio);
                    header("Location: ../views/compraE.php?err=5&&p=$n&&c=$c&&pr=$precio&&t=$total&&e=$e&&ca=$cambio" ); 
                }
            }
        }

    }
}
?>