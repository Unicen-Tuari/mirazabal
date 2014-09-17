<?php
require('C:\xampp\htdocs\valentinaetulain.com.ar\Smarty-3.1.19\libs\Smarty.class.php');

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

//Consulta
$sql = "SELECT * FROM eventos";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

$eventos = $q->fetchAll();

$smarty = new Smarty;
$smarty->assign('lista', $eventos);
$smarty->display('template/eventos.tpl');
?>