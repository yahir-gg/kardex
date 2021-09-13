<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$database = "kardex";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/


class Persona{
	public $nombres;
	public $a_paterno;
	public $a_materno;
	public $correo;
	public $contrasena;

	public function __construct($nombres,$a_paterno,$a_materno,$correo,$contrasena){
		$this->nombres	 = $nombres;
		$this->a_paterno = $a_paterno;
		$this->a_materno = $a_materno;
		$this->correo = $correo;
		$this->contrasena = $contrasena;
	}

	public function hellow(){
		return "Hello ".$this->nombres."";
	}
}

$yahir = new Persona("kevin yahir","garcia","gutierrez","yahirgarcia1996@gmail.com","1234");

//echo $yahir->hellow();

/*echo "Hola mundo php<hr/>";

$name = "Yahir";
$x = 24;

echo $name,$x;

$friends = array("Melissa","Laura","Tania","Ximena","Paola");
echo "$friends[1]";

function print_name($p){
	echo "<p>Imprimiendo ",$p," desde funcion<p/>";
}
print_name("yahir");*/

$consulta = mysqli_query($conn, "SELECT * FROM usuario");

mysqli_data_seek ($consulta, 0);

$datos= mysqli_fetch_array($consulta);
echo "- Nombre: ".$datos['nombres']."<br/>";
echo "- Nombre: ".$datos['a_paterno']."<br/>";

?>
</body>
</html>