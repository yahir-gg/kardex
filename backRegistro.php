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

    $correo_str = str_split($correo);
    $lon_correo = strlen($correo);

    for ($i=0;$i<$lon_correo;$i++){
        if($correo_str[$i]=="@"){
            if($correo_str[$i+1]=="a"){
                $tipo = 1;
                echo $tipo;
            }else{
                $tipo=2;
            }
        }
    }
?>

<?php
    $consulta = mysqli_query($conn, "INSERT INTO usuario (nombres,a_paterno,a_materno,correo,contrasena,tipo) 
    values ('$nombres','$a_pat','$a_mat','$correo','$contrasena',$tipo)");
    //mysqli_data_seek ($consulta, 0);
    //$datos= mysqli_fetch_array($consulta);

    //echo "- Nombre: ".$datos['nombres']."<br/>";
    //echo "- Nombre: ".$datos['a_paterno']."<br/>";
?>
</body>
</html>