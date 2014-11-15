<?php
include_once "model.php";

class Comentarios_model extends Model{

	function load_comentarios(){
		$sql = "SELECT * FROM comentarios";
		return $this->query($sql);		
	}
	
	function borrarcomentario($reg){
		$sql = "DELETE * FROM comentarios WHERE (id = :id)";
		return $this->queryPrepare($sql, $reg);
	}
}
?>