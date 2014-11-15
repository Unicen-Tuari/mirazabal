<?php
include_once "model.php";

class  extends Model{
	
	function agregarevento($reg){
		$sql = "INSERT INTO evento (id, administrador, pais, localidad, fecha, hora, descripcion) VALUES (:id, :administrador, :pais, :localidad, :fecha, :hora, :descripcion)";
		return $this->queryPrepare($sql, $reg);
	}
}
?>