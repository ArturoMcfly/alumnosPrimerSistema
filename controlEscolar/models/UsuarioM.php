<?php
include 'Database.php';
class UsuarioM{
    function validaUsuario($nombre,$pw){
    try{
        $connection=Database::instance();
        $sql="SELECT * from usuario where nombre='$nombre'and password='$pw'";
        $query=$connection->prepare($sql);
        $query->execute();
        $users=$query->fetchAll();
        if(count($users)>0){
            return 1;

        }else{
            return 0;
        }
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
}
 function insertaUsuario($id,$nombre,$usuario,$password,$tipo){
    try{
        $connection=Database::instance();
        $sql="INSERT into usuario values($id,'$nombre','$usuario','$password','$tipo') ";
        $query=$connection->prepare($sql);
        $query->execute();
        return 1;
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function insertatu($id,$nombre){
    try{
        $connection=Database::instance();
        $sql="INSERT into tipo_usuario values($id,'$nombre') ";
        $query=$connection->prepare($sql);
        $query->execute();
        return 1;
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function borraUsuario($id){
    try{
        $connection=Database::instance();
        $sql="DELETE from usuario where id_usuario=$id ";
        $query=$connection->prepare($sql);
        $query->execute();
        return 1;
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function borraTu($id){
    try{
        $connection=Database::instance();
        $sql="DELETE from tipo_usuario where id_tipo_u=$id ";
        $query=$connection->prepare($sql);
        $query->execute();
        return 1;
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function buscaUsuario($id){
    try{
        $connection=Database::instance();
        $sql="SELECT * from usuario where id_usuario=$id ";
        $query=$connection->prepare($sql);
        $query->execute();
        $users=$query->fetchAll();
        return $users;   
        
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function compruebaUsuarioN($n){
    try{
        $connection=Database::instance();
        $sql="SELECT * from usuario where nombre='$n' ";
        $query=$connection->prepare($sql);
        $query->execute();
        $users=$query->fetchAll();
        return $users;   
        
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function compruebaUsuarioU($u){
    try{
        $connection=Database::instance();
        $sql="SELECT * from usuario where usuario='$u' ";
        $query=$connection->prepare($sql);
        $query->execute();
        $users=$query->fetchAll();
        return $users;   
        
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function buscaTu($id){
    try{
        $connection=Database::instance();
        $sql="SELECT * from tipo_usuario where id_tipo_u=$id ";
        $query=$connection->prepare($sql);
        $query->execute();
        $users=$query->fetchAll();
        return $users;
        
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }

function actualizaUsuario($id,$nombre,$usuario,$password,$tipo){
    try{
        $connection=Database::instance();
            $sql="UPDATE usuario set nombre='$nombre',usuario='$usuario',password='$password',id_tipo_u='$tipo' where id_usuario=$id";
            $query=$connection->prepare($sql);
            $query->execute();
            return 1;
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
 function actualizaTu($id,$nombre){
    try{
        $connection=Database::instance();
            $sql="UPDATE tipo_usuario set nombre='$nombre'where id_tipo_u=$id";
            $query=$connection->prepare($sql);
            $query->execute();
            return 1;
    }catch (\PDOException $e){
        print "Error!:". $e->getMessage();
    }    
     return 0;   
 }
}
/*
$obj=new UsuarioM();
echo $obj->insertaUsuario(5,"arthur","Ingeniero","5564",21);
*/
?>