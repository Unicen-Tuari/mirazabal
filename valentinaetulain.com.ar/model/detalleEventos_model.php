<?php
include_once "model.php";

class detalleEvento_model extends Model{
	
	function load_detalleEvento($id){
		$sql = "SELECT * FROM evento WHERE id=:id";
		$arr = array(':id'=>$id);
		return $this->queryPrepare($sql,$arr);		
	}
}
?>