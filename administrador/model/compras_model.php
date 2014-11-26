<?php
include_once "model.php";

class Compras extends Model{
	
	function visualizarcompras(){
		$sql = "SELECT u.mail, i.archivo, i.titulo, li.cantidad, li.precio, c.fechacompra 
				FROM lineacompras li
					JOIN compras c ON(li.idcompra = c.idcompra)
					JOIN usuario u ON(c.idusuario = u.id)
					JOIN imagen i ON (li.idfoto = i.id)
				ORDER BY c.fechacompra DESC";
		return $this->query($sql);
	}

}
?>