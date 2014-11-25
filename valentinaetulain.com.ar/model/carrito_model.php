<?php
include_once "model.php";

class Carrito_model extends Model{

	function load_carrito(){
		$sql = "SELECT i.id, 
					   i.titulo, 
					   i.descripcion, 
					   i.categoria,
					   i.costo,
					   i.archivo, 
					   c.email, 
					   c.idfoto,  
					   c.cant, 
					   c.tarjeta 
				FROM compras c
					JOIN imagen i ON(c.idfoto = i.id)
					JOIN usuario u ON(c.email = u.mail)
				WHERE c.email = u.mail 
				ORDER BY c.id DESC";
		return $this->query($sql);		
	}
}
?>