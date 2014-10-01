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



$id = $_GET['id'];

$sql = "SELECT *
        FROM eventos  
		WHERE id=:id";
		
$q = $conn->prepare($sql);
$q->execute(array(':id'=>$id));
//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

$smarty = new Smarty;
$smarty->display('eventos.tpl');

while($r = $q->fetch()) {
	echo $r['pais'] ." - ". $r['localidad']  ." - ". $r['fecha']  ." - ". $r['hora']  ."hs - ". $r['descripcion']; 
}

?>