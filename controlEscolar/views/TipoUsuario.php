<?php
include 'platilla/header.php';
?>
<h1>TipoUsuario</h1>
<link rel="stylesheet" href="../css/tabla1.css">
<form action="../controllers/TipoUsuarioC.php" method="post">
    ID:
    <input type="text" name="id"value="<?php if(isset($_GET['id'])){echo $_GET['id'];}?>"><br>
    Nombre:
    <input type="text" name="nombre"value="<?php if(isset($_GET['n'])){echo $_GET['n'];}?>"><br>
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
        }else{
            echo "el registro ya existe";
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
        }   
    }
    
    ?>
<?php
   include 'platilla/footer.php'
?>