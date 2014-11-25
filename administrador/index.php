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
/*	}else if($_REQUEST['action'] == 'comentarios'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->comentarios();*/
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
	}else if($_REQUEST['action'] == 'eliminarevento'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->eliminarevento();
	}else if($_REQUEST['action'] == 'editarevento'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->editarevento();
	}else if($_REQUEST['action'] == 'agregarfoto'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->agregarfoto();
	}else if($_REQUEST['action'] == 'eliminarfoto'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->eliminarfoto();
	}else if($_REQUEST['action'] == 'editarfoto'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->editarfoto();
	}else if($_REQUEST['action'] == 'agregarusuario'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->agregarusuario();
	}else if($_REQUEST['action'] == 'eliminarusuario'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->eliminarusuario();
	}else if($_REQUEST['action'] == 'editarusuario'){
		include './controler/controlador.php';
		$controler = new Controlador();
		$controler->editarusuario();
	}
?>