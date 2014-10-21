<?php
include_once "model.php";

class Eventos_model extends Model{

	function load_eventos(){
		$sql = "SELECT * FROM eventos";
		return $this->query($sql);		
	}
}
?>