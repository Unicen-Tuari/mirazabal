<?php
include_once "model.php";

class Usuario extends Model{
	
	function agregarusuario($reg){
		$sql = "INSERT INTO `imagenes`.`usuario` (nombre, mail, pass, admin) VALUES (:nombre, :mail, :pass, :admin)";
		return $this->queryPrepare($sql, $reg);
	}
	
	function eliminarusuario($reg){
		$sql = "DELETE FROM `imagenes`.`usuario` WHERE `usuario`.`id` = :id";
		return $this->queryPrepare($sql, $reg);
	}
	
	function editarusuario($reg){
		$sql = "UPDATE `imagenes`.`usuario` SET nombre = :nombre, mail = :mail, pass = :pass, admin = :admin WHERE `usuario`.`id` = :id;";
		return $this->queryPrepare($sql, $reg);
	}
}
?>