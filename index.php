<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<?php
    $servername = "localhost";
    $database = "kardex";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);    
?>
<form action="backRegistro.php" method="POST">
    <label for="correo">Ingresa tu correo electronico</label>
    <input type="text" name="correo">
    <label for="contrasena">Ingresa tu contraseña</label>
    <input type="password" name="contrasena">
    <label for="">Nombre(s)</label>
    <input type="text" name="nombres">
    <label for="">Apellido Paterno</label>
    <input type="text" name="a_paterno">
    <label for="">Apellido Materno</label>
    <input type="text" name="a_materno">
    <input type="submit">
</form>
<?php
    $consulta = mysqli_query($conn, "SELECT * FROM usuario");
    mysqli_data_seek ($consulta, 0);
    $datos= mysqli_fetch_array($consulta);

    //echo "- Nombre: ".$datos['nombres']."<br/>";
    //echo "- Nombre: ".$datos['a_paterno']."<br/>";
?>
</body>
</html>