<?php
include_once "model.php";

class Evento extends Model{
	
	function agregarevento($reg){
		$sql = "INSERT INTO evento (administrador, pais, localidad, fecha, hora, descripcion) VALUES (:administrador, :pais, :localidad, :fecha, :hora, :descripcion)";
		return $this->queryPrepare($sql, $reg);
	}
	
	function eliminarevento($reg){
		$sql = "DELETE FROM `imagenes`.`evento` WHERE `evento`.`id` = :id";
		return $this->queryPrepare($sql, $reg);
	}
	
	function editarevento($reg){
		$sql = "UPDATE `imagenes`.`evento` SET administrador = :administrador, pais = :pais, localidad = :localidad, fecha = :fecha, hora = :hora, descripcion = :descripcion WHERE `evento`.`id` = :id;";
		return $this->queryPrepare($sql, $reg);
	}
}
?>