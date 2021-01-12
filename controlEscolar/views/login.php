<!DOCTYPE html>
<html lang="en">
<head>
<title>Control Escolar</title>
<link rel="stylesheet" href="../css/tabla.css">
</head>
<body>
<?php
if(isset($_GET['err'])){
    if($_GET['err']=='1'){
        echo "Usuario y/o contraseña es incorrercta..";
    }
  }
?>
<form action="../controllers/loginC.php"method="post">
usuario:
<input type="text" name="usuario">
contraseña:
<input type="text" name="pw">
<button>Login</button>

</body>
</html>