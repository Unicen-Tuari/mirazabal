<?php 
	class Controlador{
		public function index(){
			//include "./model/index_model.php";
			//$modelo_galeria = new Index_model();	
			include './view/vistaindex.php';
			$vista = new Vistaindex();
			$vista->mostrar();
		}
		
		public function eventos(){
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				include "./model/eventos_model.php";
				include './view/vistaeventos.php';
				$modelo = new Eventos_model();
				$vista = new Vistaeventos();
				$vista->lista = $modelo->load_eventos();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function fotos(){
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				include "./model/fotos_model.php";
				include './view/vistafotos.php';
				$modelo = new Fotos_model();	
				$vista = new Vistafotos();
				$vista->lista = $modelo->load_fotos();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function usuarios(){
			//include "./model/usuarios_model.php";
			//$modelo_galeria = new Usuarios_model();	
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				include './view/vistausuarios.php';
				$vista = new Vistausuarios();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function compras(){
			//include "./model/compras_model.php";
			//$modelo_galeria = new Compras_model();	
			include './view/vistacompras.php';
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				$vista = new Vistacompras();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function comentarios(){
			include "./model/comentarios_model.php";
			include './view/vistacomentarios.php';
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				$comentarios = new Comentarios_model();
				$vista = new Vistacomentarios();
				$vista->lista = $comentarios->load_comentarios();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
				
		public function agregarevento(){
			include './view/vistaeventos.php';
			include "./model/agregarevento_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				$evento = new Evento();
				$reg = array(':id'=>$_REQUEST["id"], ':administrador'=>$_REQUEST["administrador"], ':pais'=>$_REQUEST["pais"], ':localidad'=>$_REQUEST["localidad"], ':fecha'=>$_REQUEST["fecha"], ':hora'=>$_REQUEST["hora"],':descripcion'=>$_REQUEST["descripcion"]);
				$evento->agregarevento($reg);
				$vista = new Vistaeventos();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function borrarcomentarios(){
			include "./model/comentarios_model.php";
			include './view/vistacomentarios.php';
			$comentarios = new Comentarios_model();
			$vista = new Vistacomentarios();
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				$reg = array(':id'=>$_REQUEST["id"]);
				$vista->lista = $comentarios->borrarcomentario($reg);
				$vista = new Vistacomentarios();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function Ingresar(){
			include './view/vistaindice.php';
			include_once './model/index_model.php';
			$reg = array(':email'=>$_POST["email"], ':pass'=>$_POST["pass"]);

			$v = new Index_model();

			$consulta = $v->verificarusuario($reg);
			
			if (count($consulta) == 0){
				header('Location: index.php?action=loginerror');
				exit();
			}else{
				$_SESSION['idusuario'] = $consulta[0]['id'];
				$_SESSION['nombre'] = $consulta[0]['nombre'];
				header('Location: index.php?action=eventos');
			}
		}
		
		public function Loginerror(){
			include './view/vistaloginerror.php';
			$vista = new Vistaloginerror();
			$vista->mostrar();
			
		}
		
		public function Logout(){
			include './view/vistalogout.php';
			session_destroy();
			$vista = new Vistalogout();
			$vista->mostrar();
		}
	}
?>