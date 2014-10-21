<?php
include_once "model.php";

class Galeria_model extends Model{

	function load_fotos(){
		$sql = "SELECT * FROM imagen LIMIT 1";
		return $this->query($sql);		
	}
}
?>