<?php
include 'Database.php';
class ComprasME{
    function buscaProducto($n){
        try{
            $connection=Database::instance();
            $sql="SELECT * from productoP where nombre='$n' ";
            $query=$connection->prepare($sql);
            $query->execute();
            $users=$query->fetchAll();
            return $users;   
            
        }catch (\PDOException $e){
            print "Error!:". $e->getMessage();
        }    
         return 0;   
     }
     function venta($id,$c,$e,$cambio,$total){
        try{
            $connection=Database::instance();
            $sql="INSERT into ventasN (id_p,cantidad,efectivo,cambio,total) values($id,'$c',$e,$cambio,$total) ";
            $query=$connection->prepare($sql);
            $query->execute();
            return 1;
        }catch (\PDOException $e){
            print "Error!:". $e->getMessage();
        }    
         return 0;   
     }
     function act($id,$n,$nc,$precio){
        try{
            $connection=Database::instance();
                $sql="UPDATE productoP set nombre='$n',cantidad='$nc' where id_p=$id";
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