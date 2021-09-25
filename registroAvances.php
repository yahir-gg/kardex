<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar avances</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $database = "kardex";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername,$username,$password,$database);
        $q0 = mysqli_query($conn,"SELECT nombre FROM uea"); 
        mysqli_data_seek ($q0, 0);
        $lista_ueas = mysqli_fetch_array($q0);
        echo count($lista_ueas);
        echo $lista_ueas[0];
    ?>
    <span>Selecciona una UEA</span>
    <select name="" id="">
        
        <?php
            echo '<option value="' . htmlspecialchars($lista_ueas) . '" <option/>';
        ?>

    </select>
</body>
</html>