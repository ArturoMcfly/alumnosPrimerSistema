<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Programa de formula general</title>
</head>
<body>

<?php
echo "PROGRAMA DE FORMULA GENERAL"
?>
 <form action="../controllers/loginC.php"method="post">
 X^2=:
 <input type="text"name="x2";>
 x=:
 <input type="text"name="x";>
 termino independiente=:
 <input type="text"name="n";>
 <button type="subimit">aceptar</button>
 </form>
 
</body>
</html>
<?php
echo"la respuesta es:";
if(isset($_GET['res'])){
echo $_GET['res'];
}
?>