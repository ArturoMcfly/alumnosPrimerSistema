<h1>COMPRAS</h1>
<link rel="stylesheet" href="../css/tabla1.css">
    <form action="../controllers/compraCE.php" method="post">
    producto:
    <input type="text" name="producto">
    <br>
    cantidad:
    <input type="text" name="cantidad"><br>
    efectivo:
    <input type="text" name="efectivo"><br>
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
        }else if($_GET['err']=='5'){
            echo "la venta se realiz con exito";
            echo "producto: ".$_GET['p'];
            echo "cantidad: ".$_GET['c'];
            echo "precio:   ".$_GET['pr'];
            echo "total:    ".$_GET['t'];
            echo "efectivo: ".$_GET['e'];
            echo "cambio:   ".$_GET['ca']; 
        }else if($_GET['err']=='4'){
            echo "El efecivo no es suficiente";
        }
    
    }
    ?>
    
    <?php
    
    
    include 'platilla/footer.php';
?>