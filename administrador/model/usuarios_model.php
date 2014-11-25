<?php
include_once "model.php";

class Usuarios extends Model{

	function load_usuarios(){
		$sql = "SELECT * FROM usuario";
		return $this->query($sql);		
	}
}
?>