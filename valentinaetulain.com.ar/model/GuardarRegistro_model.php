<?php
include_once "model.php";

class Usuario extends Model{
	
	function guardarusuario($reg){
		$sql = "INSERT INTO usuario (nombre, mail, pass) VALUES (:nombre, :email, :pass)";
		return $this->insert($sql, $reg);
	}
	
	function verificarusuario($reg){
		$sql = "SELECT id, nombre FROM usuario WHERE (mail = :email AND pass = :pass)";
		return $this->queryPrepare($sql, $reg);
	}
	
	function guardarcomentario($reg){
		$sql = "INSERT INTO comentarios (nombre, email, message) VALUES (:nombre, :email, :message)";
		return $this->insert($sql, $reg);
	}
}
?>