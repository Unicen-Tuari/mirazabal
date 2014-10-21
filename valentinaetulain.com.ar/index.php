<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	if(!array_key_exists('action', $_REQUEST)){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->indice();
	} 
	else if($_REQUEST['action'] == 'biografia'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->biografia();	
	}else if($_REQUEST['action'] == 'eventos'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->eventos();
	}else if($_REQUEST['action'] == 'detalleEvento'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->detalleEventos();
	}else if($_REQUEST['action'] == 'galeria'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->galeria();
	}else if($_REQUEST['action'] == 'fotos'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->fotos();
	}else if($_REQUEST['action'] == 'contacto'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->contacto();
	}else if($_REQUEST['action'] == 'contactoExito'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->contactoExito();
	}else if($_REQUEST['action'] == 'carrito'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->carrito();
	}else if($_REQUEST['action'] == 'registro'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->registro();
	}
?>