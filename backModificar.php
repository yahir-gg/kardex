<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos</title>
</head>
<body>
<?php
    $servername = "localhost";
    $database = "kardex";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);    

    $nombres = utf8_decode($_POST['nombres']);
    $a_pat = utf8_decode($_POST['a_paterno']);
    $a_mat = utf8_decode($_POST['a_materno']);
    $cont = utf8_decode($_POST['contrasena']);
    $correo = utf8_decode($_POST['correo']);
?>

<?php
    $consulta = mysqli_query($conn, "UPDATE usuario SET 
    nombres = '$nombres', a_paterno='$a_pat',
    a_materno='$a_mat',contrasena='$cont' WHERE correo='$correo'");  
?>
</body>
</html>