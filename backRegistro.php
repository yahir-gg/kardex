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
    echo "Se ha registrado ",$correo,".";
?>

<?php
    $consulta = mysqli_query($conn, "SELECT * FROM usuario");
    mysqli_data_seek ($consulta, 0);
    $datos= mysqli_fetch_array($consulta);

    //echo "- Nombre: ".$datos['nombres']."<br/>";
    //echo "- Nombre: ".$datos['a_paterno']."<br/>";
?>
</body>
</html>