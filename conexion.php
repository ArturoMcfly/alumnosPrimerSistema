


<!DOCTYPE html>
<head>
<title>Clase i5</title>
</head>
<body>
<?php
if(isset($_GET['err'])){
  if($_GET['err']=='1'){
      echo "Usuario y/o contraseña es incorrercta..";
  }
}
?>
<form action="formulario.php"method="post">
usuario:
<input type="text" name="usuario">
contraseña:
<input type="text" name="pw">
<button>Login</button>
</body>
</html>