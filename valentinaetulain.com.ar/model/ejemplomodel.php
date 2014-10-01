<?php
	include "fotos_model.php";
	
	$fotosmodel = new Fotos_model();
	var_dump($fotosmodel->load_fotos());
?>