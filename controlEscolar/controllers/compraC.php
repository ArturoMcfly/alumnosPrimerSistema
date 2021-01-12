<?php
include "../models/ComprasM.php";
$obj=new ComprasM();
$id=$_POST['producto'];
$c=$_POST['cantidad'];
if($id==''||$id==null||$c==''||$c==null){
    header('Location: ../views/compra.php?err=0');
}else{
    $comprobar=$obj->buscaProducto($id);
    if($comprobar==null){
        header('Location: ../views/compra.php?err=1');   
    }else{
        $cant="";
        $prod="";
        foreach ($comprobar as $row){
            $cant=$row['cantidad'];
            $nom=$row['nombre'];
           }
        if($cant=='0'){
            header('Location: ../views/compra.php?err=2');  
        }else{
            if($cant<$c){
              echo "la cantidd de producto no es suficiente";
                echo $cant;
              echo $c;
                  header('Location: ../views/compra.php?err=3');  
            }else{
            echo "la cantidd de producto si es suficiente";
                echo $cant;
              echo $c;
            $res=$cant-$c;
            $co=$obj->actualizaPro($id,$nom,$res);
            $resultado=$obj->venta($id,$c);
           
            if($resultado==1){
                header('Location: ../views/compra.php?err=4');  
            } 
        }
        }
    }
}


echo $id;
?>