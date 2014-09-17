<?php
//Configuración
$host 	= "localhost";
$db	= "imagenes";
$user	= "root";
$pass	= "";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}


			
$administrador = 'Matias Irazabal';
$pais = $_POST["pais"];
$localidad = $_POST["localidad"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$descripcion = $_POST["descripcion"];
				

//Consulta - Parametros Posicionales
$sql = "INSERT INTO eventos (administrador, pais, localidad, fecha, hora, descripcion) VALUES (:administrador, :pais, :localidad, :fecha, :hora, :descripcion)";
$q = $conn->prepare($sql);
$q->execute(array(':administrador'=>$administrador,':pais'=>$pais,':localidad'=>$localidad,':fecha'=>$fecha,':hora'=>$hora,':descripcion'=>$descripcion));
header('Location: eventos.php');

?>