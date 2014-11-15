<?php
include_once "model.php";

class Eventos_model extends Model{

	function load_eventos(){
		$sql = "SELECT * FROM evento";
		return $this->query($sql);		
	}
}
?>