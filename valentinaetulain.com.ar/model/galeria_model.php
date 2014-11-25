<?php
include_once "model.php";

class Galeria_model extends Model{

	function load_categorias(){
		$sql = "SELECT * 
				FROM imagen
				GROUP BY categoria";
		return $this->query($sql);		
	}
}
?>