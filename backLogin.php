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

    $correo = utf8_decode($_POST['correo']);
    $contrasena = utf8_decode($_POST['contrasena']);
    $anio = $correo[1] . $correo[2];
    
?>

<?php
    $consulta = mysqli_query($conn, "SELECT * FROM usuario 
    WHERE correo = '$correo' AND contrasena ='$contrasena'"); 
    mysqli_data_seek ($consulta, 0);
    $datos= mysqli_fetch_array($consulta);

    echo "- Bienvenido: ".$datos['nombres']."<br/>";
    echo " ".$datos['a_paterno']."<br/>";
    echo " ".$datos['a_materno']."<br/>";
?>
<a href="registroAvances.php">Registrar avance</a>
<a href="modificar.php?variable=<?php echo urlencode("$correo");?>">Modificar datos</a>
</body>
</html>