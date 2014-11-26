<?php
	error_reporting(-1);
	//ini_set('display_errors', 1);
	session_start();
	
	if(!array_key_exists('action', $_REQUEST)){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->indice();
	} 
	else if($_REQUEST['action'] == 'biografia'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->biografia();	
	}else if($_REQUEST['action'] == 'eventos'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->eventos();
	}else if($_REQUEST['action'] == 'detalleEvento'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->detalleEventos();
	}else if($_REQUEST['action'] == 'galeria'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->galeria();
	}else if($_REQUEST['action'] == 'fotos'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->fotos();
	}else if($_REQUEST['action'] == 'contacto'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->contacto();
	}else if($_REQUEST['action'] == 'contactoExito'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->contactoExito();
	}else if($_REQUEST['action'] == 'carrito'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->carrito();
	}else if($_REQUEST['action'] == 'login'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->login();
	}else if($_REQUEST['action'] == 'registro'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->registro();
	}else if($_REQUEST['action'] == 'guardarRegistro'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->GuardarRegistro();
	}else if($_REQUEST['action'] == 'ingresar'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->Ingresar();
	}else if($_REQUEST['action'] == 'logout'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->Logout();
	}else if($_REQUEST['action'] == 'loginerror'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->Loginerror();
	}else if($_REQUEST['action'] == 'guardarComentario'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->guardarComentario();
	}else if($_REQUEST['action'] == 'cargarcarrito'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->cargarcarrito();
	}else if($_REQUEST['action'] == 'fotoscategoria'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->fotoscategoria();
	}else if($_REQUEST['action'] == 'agregaracarrito'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->agregaracarrito();
	}else if($_REQUEST['action'] == 'mail'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->mail();
	}else if($_REQUEST['action'] == 'compra'){
		include_once './controler/controlador.php';
		$controler = new Controlador();
		$controler->compra();
	}
?>