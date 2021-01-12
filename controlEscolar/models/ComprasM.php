<?php
include 'Database.php';
class ComprasM{
    function buscaProducto($id){
        try{
            $connection=Database::instance();
            $sql="SELECT * from producto where id_p=$id ";
            $query=$connection->prepare($sql);
            $query->execute();
            $users=$query->fetchAll();
            return $users;   
            
        }catch (\PDOException $e){
            print "Error!:". $e->getMessage();
        }    
         return 0;   
     }
     function venta($id,$c){
        try{
            $connection=Database::instance();
            $sql="INSERT into venta (id_p,cantidad) values($id,'$c') ";
            $query=$connection->prepare($sql);
            $query->execute();
            return 1;
        }catch (\PDOException $e){
            print "Error!:". $e->getMessage();
        }    
         return 0;   
     }
     function actualizaPro($id,$nom,$res){
        try{
            $connection=Database::instance();
                $sql="UPDATE producto set nombre='$nom',cantidad='$res' where id_p=$id";
                $query=$connection->prepare($sql);
                $query->execute();
                return 1;
        }catch (\PDOException $e){
            print "Error!:". $e->getMessage();
        }    
         return 0;   
     }
}
?>