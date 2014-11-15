<?php
include_once "model.php";

class Index_model extends Model{

	function registrar($user, $pass ){
		$sql = "SELECT * FROM usuarios WHERE user=:user AND pass=:pass";
		$arr = array(':id'=>$user, $pass);
		return $this->queryPrepare($sql,$arr);			
	}
	
	function verificarusuario($reg){
		$sql = "SELECT id, nombre FROM usuario WHERE mail =:email AND pass =:pass";
		return $this->queryPrepare($sql, $reg);
	}
}
?>