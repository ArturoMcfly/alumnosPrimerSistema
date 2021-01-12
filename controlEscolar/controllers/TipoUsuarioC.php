<?php
include "../models/UsuarioM.php";
$obj=new UsuarioM();
$id=$_POST['id'];
    $n=$_POST['nombre'];
if(isset($_POST['Insertar'])){
 if($id==''||$id==null||$n==''||$n==null){
   Header('Location: ../views/TipoUsuario.php?err=0');
 }else{
 $comprobar=$obj->buscaTu($id);
 if($comprobar==null){       
$resultado=$obj->insertaTu($id,$n);
if($resultado==1){
    Header('Location: ../views/TipoUsuario.php?err=1');
}else{
    Header('Location: ../views/TipoUsuario.php?err=0');
}
}else{
    Header('Location: ../views/TipoUsuario.php?err=2');
}
}
}

else if(isset($_POST['Actualizar'])){
    $resultado=$obj->buscaTu($id);
    if($resultado==null){
        Header('Location: ../views/TipoUsuario.php?err3=0');
    }else{
        $act=$obj->actualizaTu($id,$n);
        Header('Location: ../views/TipoUsuario.php?err3=1');
    }
}

else if(isset($_POST['Buscar'])){
    $resultado=$obj->buscaTu($id);
    if($resultado==null){
        Header('Location: ../views/TipoUsuario.php?err1=0');
    }else{
        $id="";
        $n="";
        foreach ($resultado as $row){
            $id=$row['id_tipo_u'];
            $n=$row['nombre'];
        }
        Header("Location: ../views/TipoUsuario.php?err1=1&&id=$id&&n=$n");
}}

else if(isset($_POST['Eliminar'])){
    $comprobar=$obj->buscaTu($id);
    if($comprobar==null){
        Header('Location: ../views/TipoUsuario.php?err2=0');
    }else{
    $resultado=$obj->borraTu($id);
    if($resultado==1){
        Header('Location: ../views/TipoUsuario.php?err2=1');
    }else{
        Header('Location: ../views/TipoUsuario.php?err2=0');
    }
}

}
?>