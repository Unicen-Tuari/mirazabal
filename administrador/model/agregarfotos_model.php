<?php
include_once "model.php";

class Fotos_model extends Model{
	
	function agregarfoto($reg){
		$sql = "INSERT INTO `imagenes`.`imagen` (`titulo`, `categoria`, `descripcion`, `costo`, `archivo`) VALUES (:titulo, :categoria, :descripcion, :costo, :archivo);";
		return $this->queryPrepare($sql, $reg);
	}
	
	function eliminarfoto($reg){
		$sql = "DELETE FROM `imagenes`.`imagen` WHERE `imagen`.`id` = :id";
		return $this->queryPrepare($sql, $reg);
	}
	
	function editarfoto($reg){
		$sql = "UPDATE `imagenes`.`imagen` SET titulo = :titulo, categoria = :categoria, descripcion = :descripcion, costo = :costo, archivo = :archivo WHERE `imagen`.`id` = :id";
		return $this->queryPrepare($sql, $reg);
	}
}
?>