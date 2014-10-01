<?php
include_once "model.php";

class Fotos_model extends Model{

	function load_fotos(){
		$sql = "SELECT * FROM imagen";
		return $this->query($sql);		
	}
}
?>