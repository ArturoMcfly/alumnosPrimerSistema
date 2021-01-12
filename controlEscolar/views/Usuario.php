<?php
include 'platilla/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="../css/tabla1.css">
</head>
<body>
    
</body>
</html>
    <h1>Usuario..</h1>
    <link rel="stylesheet" href="../css/tabla1.css">
    <form action="../controllers/UsuarioC.php" method="post">
    ID:
    <input type="text" name="id"value="<?php if(isset($_GET['id'])){echo $_GET['id'];}?>"><br>
    Nombre:
    <input type="text" name="nombre" value="<?php if(isset($_GET['n'])){echo $_GET['n'];}?>"><br>
    Usuario:
    <input type="text" name="usuario"value="<?php if(isset($_GET['u'])){echo $_GET['u'];}?>"><br>
    Password:
    <input type="text" name="pw"value="<?php if(isset($_GET['p'])){echo $_GET['p'];}?>"><br>
    Tipo de Usuario:
    <input type="text" name="tipou"value="<?php if(isset($_GET['tp'])){echo $_GET['tp'];}?>"><br>
    <button type="submit"  name="Insertar">Insertar </button>
    <button type="submit"  name="Actualizar">Actualizar</button>
    <button type="submit"  name="Buscar">Buscar</button>
    <button type="submit"  name="Eliminar">Eliminar</button>
    </form>
    <?php
    if(isset($_GET['err'])){
        if($_GET['err']=='1'){
            echo "se ha insertado el registro ";
        }else if($_GET['err']=='0'){
            echo"algun parametro no esta bien colocado";
        }else if($_GET['err']=='2'){
            echo"el registro ya existe";
        }else if($_GET['err']=='3'){
            echo"el nombre ingresado ya existe";
        }else {
            echo"el usuario ingresado ya existe";
        }
    }
    if(isset($_GET['err1'])){
        if($_GET['err1']=='1'){
        echo "el registro se encontro";
        
        }else if($_GET['err1']=='0'){
            echo"el registro no se encontro";
        }   
    }
    
    if(isset($_GET['err2'])){
        if($_GET['err2']=='1'){
        echo "el registro se ha eliminado";
        }else if($_GET['err2']=='0'){
            echo"el registro no se encontro";
        }   
    }
    if(isset($_GET['err3'])){
        if($_GET['err3']=='1'){
        echo "el registro se ha actualizado";
        }else if($_GET['err3']=='0'){
            echo"el registro no se encontro";
        }else if($_GET['err3']=='2'){
            echo"el nombre que quieres actualizar ya existe en otro registro";
        } else{
            echo"el usuario que quieres actualizar ya existe en otro registro";
        }  
    }

    ?>

    <?php
    
    
    include 'platilla/footer.php'
?>