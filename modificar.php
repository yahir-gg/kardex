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
    $correo= $_GET['variable'];
    echo $correo;
?>

<?php
    $consulta = mysqli_query($conn, "SELECT * FROM usuario 
    WHERE correo = '$correo'"); 
    mysqli_data_seek ($consulta, 0);
    $datos= mysqli_fetch_array($consulta);
    $nombres = $datos['nombres'];
    $a_paterno = $datos['a_paterno'];
    $a_materno = $datos['a_materno'];
    $contrasena = $datos['contrasena'];
    $correo = $datos['correo'];
?>
<form action="backModificar.php" method="POST">
    <label for="">Nombres</label>
    <input type="text" name="nombres"value="<?php echo htmlspecialchars($nombres); ?>">
    <label for="">Apellido Paterno</label>
    <input type="text" name="a_paterno" value="<?php echo htmlspecialchars($a_paterno); ?>">
    <label for="">Apellido Materno</label>
    <input type="text" name="a_materno" value="<?php echo htmlspecialchars($a_materno); ?>">
    <label for="">Contraseña</label>
    <input type="text" name="contrasena" value="<?php echo htmlspecialchars($contrasena); ?>">
    <label for="">Correo</label>
    <input type="text" name="correo" value="<?php echo htmlspecialchars($correo);?>">
    <input type="submit" value="Actualizar datos">
</form>
</body>
</html>