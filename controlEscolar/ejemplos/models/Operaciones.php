<?php
class Operaciones{
    function sumar($x,$y){//unafuncion siempre te retorna algo
        $resultado=$x+$y;
        return $resultado;
    }
    function restar($x,$y){
        $resultado=$x-$y;
        return $resultado;
    }
    function multiplicar($x,$y){
        $resultado=($x)*($y);
        return $resultado;
    }
    function dividir($x,$y){
        $resultado=$x/$y;
        return $resultado;
    }
}
?>