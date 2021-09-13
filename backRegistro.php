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
    $nombres = utf8_decode($_POST['nombres']);
    $a_pat = utf8_decode($_POST['a_paterno']);
    $a_mat = utf8_decode($_POST['a_materno']);
    //echo "Se ha registrado ",$correo,".";
?>

<?php
    $consulta = mysqli_query($conn, "INSERT INTO usuario (nombres,a_paterno,a_materno,correo,contrasena) 
    values ('$nombres','$a_pat','$a_mat','$correo','$contrasena')");
    //mysqli_data_seek ($consulta, 0);
    //$datos= mysqli_fetch_array($consulta);

    //echo "- Nombre: ".$datos['nombres']."<br/>";
    //echo "- Nombre: ".$datos['a_paterno']."<br/>";
?>
</body>
</html>