<?php
include_once "model.php";

class Compras extends Model{

	function nuevacompra($usuario){
	    $params = array(':usuario' => $usuario );
		
		$sql = "INSERT INTO `imagenes`.`compras` (`idusuario`) VALUES (:usuario)";
		return $this->insert($sql,$params);		
	}
	
	function insertenlineadecompra($idcompra, $idfoto, $precio){
	    $params = array(':idcompra' => $idcompra, ':idfoto' => $idfoto, ':precio' => $precio);
		
		$sql = "INSERT INTO `imagenes`.`lineacompras` (`idcompra`, `idfoto`, `cantidad`, `precio` ) VALUES (:idcompra, :idfoto, '1', :precio)";
		return $this->insert($sql,$params);		
	}

}
?>