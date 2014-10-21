<?php 

$host 	= "localhost";
$db	= "imagenes";
$user	= "root";
$pass	= "";

/* Obtenemos el id que fue pasado como parametro por URL, y luego creamos 2 variables: prev y sig que corresponden a la id anterior y siguiente de la imagen actual */ 

$id = $_GET['id'];
$prev = $id-1;
$sig = $id+1;

/* Conecta la base y obtiene la info de la img actual */

$conexion = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
$consulta = "SELECT *
             FROM imagen 
			 WHERE id = $id";

$resultado = $conexion->query($consulta);
$fila = $resultado->fetch();

?>

<img src="<?php echo $fila['archivo']; ?>" alt="<?php echo $fila['descripcion'];?>" />