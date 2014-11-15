<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();
	
	if(!array_key_exists('action', $_REQUEST)){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->index();
	}else if($_REQUEST['action'] == 'eventos'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->eventos();	
	}else if($_REQUEST['action'] == 'fotos'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->fotos();
	}else if($_REQUEST['action'] == 'usuarios'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->usuarios();
	}else if($_REQUEST['action'] == 'compras'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->compras();
	}else if($_REQUEST['action'] == 'comentarios'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->comentarios();
	}else if($_REQUEST['action'] == 'borrarcomentarios'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->borrarcomentarios();
	}else if($_REQUEST['action'] == 'logout'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->logout();
	}else if($_REQUEST['action'] == 'agregarevento'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->agregarevento();
	}else if($_REQUEST['action'] == 'loginerror'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->Loginerror();
	}else if($_REQUEST['action'] == 'ingresar'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->Ingresar();
	}
?>