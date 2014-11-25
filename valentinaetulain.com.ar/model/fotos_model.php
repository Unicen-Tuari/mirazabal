<?php
include_once "model.php";

class Fotos_model extends Model{

	function load_fotos(){
		$sql = "SELECT * FROM imagen";
		return $this->query($sql);		
	}
	
	function load_fotoscategoria($categoria){
		$param = array(':categoria'=>$categoria);
		$sql = "SELECT * FROM imagen WHERE categoria = :categoria";
		return $this->queryPrepare($sql, $param);	
	}
	
	function load_fotografiaporid($idproducto){
		$param = array(':idproducto'=>$idproducto);
		$sql = "SELECT * FROM imagen WHERE id = :idproducto";
		return $this->queryPrepare($sql, $param);
	}
}
?>