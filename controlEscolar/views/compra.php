<h1>COMPRAS</h1>
<link rel="stylesheet" href="../css/tabla1.css">
    <form action="../controllers/compraC.php" method="post">
    producto:
    <input type="text" name="producto">
    <br>
    cantidad:
    <input type="text" name="cantidad"><br>
    <button >Compra </button>
    <?php
    if(isset($_GET['err'])){
        if($_GET['err']=='0'){
            echo "alguno de los parametros no esta completo";
        }else if($_GET['err']=='1'){
            echo "el producto no existe";
        }else if($_GET['err']=='2'){
            echo "ya no hay existencia en almacen de este producto";
        }else if($_GET['err']=='3'){
            echo "el producto no es suficiente";
        }else if($_GET['err']=='4'){
            echo "la venta se realiz con exito";
        }
    
    }
    ?>
    
    <?php
    
    
    include 'platilla/footer.php';
?>