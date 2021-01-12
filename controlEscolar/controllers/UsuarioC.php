<?php
include "../models/UsuarioM.php";
$obj=new UsuarioM();
$id=$_POST['id'];
    $n=$_POST['nombre'];
    $u=$_POST['usuario'];
    $p=$_POST['pw'];
    $tp=$_POST['tipou'];
if(isset($_POST['Insertar'])){
 if($id==''||$id==null||$n==''||$n==null||$u==''||$u==null||$p==''||$p==null||$tp==''||$tp==null){
   Header('Location: ../views/Usuario.php?err=0');
 }else{
    $comprobar=$obj->buscaUsuario($id); 
    if($comprobar==null ){       
        $comprobarN=$obj->compruebaUsuarioN($n);    
        if($comprobarN==null ){ 
            $comprobarU=$obj->compruebaUsuarioU($u);    
            if($comprobarU==null ){ 
$resultado=$obj->insertaUsuario($id,$n,$u,$p,$tp);
if($resultado==1){
    Header('Location: ../views/Usuario.php?err=1');
}else{
    Header('Location: ../views/Usuario.php?err=0');
}
            }else{
                Header('Location: ../views/Usuario.php?err=4');
            }
        }else{
            Header('Location: ../views/Usuario.php?err=3');
        }
}else{
    Header('Location: ../views/Usuario.php?err=2');
}
}
}

else if(isset($_POST['Actualizar'])){
    $resultado=$obj->buscaUsuario($id);
    if($resultado==null){
        Header('Location: ../views/Usuario.php?err3=0');
    }else{
        $id1="";
       $comprobarN=$obj->compruebaUsuarioN($n);
       foreach ($comprobarN as $row){
        $id1=$row['id_usuario'];
       }

       if($id1==$id){
        $id2="";
        $comprobarU=$obj->compruebaUsuarioU($u);
        foreach ($comprobarU as $row){
         $id2=$row['id_usuario'];
        }
        if($id2==$id){
        $act=$obj->actualizaUsuario($id,$n,$u,$p,$tp);
        Header('Location: ../views/Usuario.php?err3=1');
        }else{
            Header('Location: ../views/Usuario.php?err3=3'); 
        }
    }else{
        Header('Location: ../views/Usuario.php?err3=2');
    }
}
}

else if(isset($_POST['Buscar'])){
    $resultado=$obj->buscaUsuario($id);
    if($resultado==null){
        Header('Location: ../views/Usuario.php?err1=0');
    }else{
    $id="";
    $n="";
    $u="";
    $p="";
    $tp="";
    foreach ($resultado as $row){
        $id=$row['id_usuario'];
        $n=$row['nombre'];
        $u=$row['usuario'];
        $p=$row['password'];
        $tp=$row['id_tipo_u'];
    }

    Header("Location: ../views/Usuario.php?err1=1&&id=$id&&n=$n&&u=$u&&p=$p&&tp=$tp");
}
}

else if(isset($_POST['Eliminar'])){
    $comprobar=$obj->buscaUsuario($id); 
    if($comprobar==null ){       
        Header('Location: ../views/Usuario.php?err2=0');
    }else{ 
    $resultado=$obj->borraUsuario($id);
    if($resultado==1){
        Header('Location: ../views/Usuario.php?err2=1');
    }else{
        Header('Location: ../views/Usuario.php?err2=0');
    }
}
}
?>