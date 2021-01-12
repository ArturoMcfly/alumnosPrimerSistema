<?php
class Operaciones{
    function fGen($x,$y,$z){
       $ra=pow($y,2)+(-4*(($x)*($z)));
       if($ra<0){
           return "tu ecuacion no tiene solucion";
       }else{
           $x1=((-1*$y)+sqrt($ra))/2;
           $x2=((-1*$y)-sqrt($ra))/2;
           $resultado="x1= ".$x1." x2= ".$x2;
       }
       return $resultado;
    }
} 
?>