<?php 
	class Controlador{
	
		/*          INDEX          */
	
		public function index(){
			//include "./model/index_model.php";
			//$modelo_galeria = new Index_model();	
			include './view/vistaindex.php';
			$vista = new Vistaindex();
			$vista->mostrar();
		}
		
		/*          EVENTOS          */
		
		public function eventos(){
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
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
		
		public function agregarevento(){
			include './view/vistaeventos.php';
			include "./model/agregarevento_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Evento();
				$reg = array( ':administrador'=>$_POST['administrador'], ':pais'=>$_POST['pais'], ':localidad'=>$_POST['localidad'], ':fecha'=>$_POST['fecha'], ':hora'=>$_POST['hora'],':descripcion'=>$_POST['descripcion']);
				$vista = new Vistaeventos();
				$evento->agregarevento($reg);
				header('Location: index.php?action=eventos');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function editarevento(){
			include './view/vistaeventos.php';
			include "./model/agregarevento_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Evento();
				$reg = array( ':id'=>$_POST['id'], ':administrador'=>$_POST['administrador'], ':pais'=>$_POST['pais'], ':localidad'=>$_POST['localidad'], ':fecha'=>$_POST['fecha'], ':hora'=>$_POST['hora'],':descripcion'=>$_POST['descripcion']);
				$vista = new Vistaeventos();
				$evento->editarevento($reg);
				header('Location: index.php?action=eventos');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function eliminarevento(){
			include './view/vistaeventos.php';
			include "./model/agregarevento_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Evento();
				$reg = array('id'=>$_REQUEST['id']);
				$vista = new Vistaeventos();
				$evento->eliminarevento($reg);
				header('Location: index.php?action=eventos');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
			
		/*          FOTOS          */
		
		public function fotos(){
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
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
		
		public function agregarfoto(){
			include './view/vistafotos.php';
			include "./model/agregarfotos_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Fotos_model();
				$reg = array( ':titulo'=>$_POST['titulo'], ':categoria'=>$_POST['categoria'], ':descripcion'=>$_POST['descripcion'], ':costo'=>$_POST['costo'], ':archivo'=>"imagenes/".$_POST['archivo']);
				$vista = new Vistafotos();
				$evento->agregarfoto($reg);
				header('Location: index.php?action=fotos');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function eliminarfoto(){
			include './view/vistafotos.php';
			include "./model/agregarfotos_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Fotos_model();
				$reg = array( 'id'=>$_REQUEST['id']);
				$vista = new Vistafotos();
				$evento->eliminarfoto($reg);
				header('Location: index.php?action=fotos');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function editarfoto(){
			include './view/vistafotos.php';
			include "./model/agregarfotos_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Fotos_model();
				$reg = array(':id'=>$_POST['id'], ':titulo'=>$_POST['titulo'], ':categoria'=>$_POST['categoria'], ':descripcion'=>$_POST['descripcion'], ':costo'=>$_POST['costo'], ':archivo'=>"imagenes/".$_POST['archivo']);
				$vista = new Vistafotos();
				$evento->editarfoto($reg);
				header('Location: index.php?action=fotos');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		/*          USUARIOS          */
		
		public function usuarios(){	
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				include './view/vistausuarios.php';
				include "./model/usuarios_model.php";
				$modelo = new Usuarios();
				$vista = new Vistausuarios();
				$vista->lista = $modelo->load_usuarios();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function agregarusuario(){
			include './view/vistausuarios.php';
			include "./model/agregarusuario_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Usuario();
				$reg = array( ':nombre'=>$_POST['nombre'], ':mail'=>$_POST['mail'], ':pass'=>$_POST['pass'], ':admin'=>$_POST['admin']);

				$vista = new Vistausuarios();
				$evento->agregarusuario($reg);
				header('Location: index.php?action=usuarios');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function eliminarusuario(){
			include './view/vistausuarios.php';
			include "./model/agregarusuario_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Usuario();
				$reg = array( 'id'=>$_REQUEST['id']);
				$vista = new Vistausuarios();
				$evento->eliminarusuario($reg);
				header('Location: index.php?action=usuarios');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
		
		public function editarusuario(){
			include './view/vistausuarios.php';
			include "./model/agregarusuario_model.php";
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				$evento = new Usuario();
				$vista = new Vistausuarios();
				$reg = array( ':id'=>$_POST['id'], ':nombre'=>$_POST['nombre'], ':mail'=>$_POST['mail'], ':pass'=>$_POST['pass'], ':admin'=>$_POST['admin']);
				$evento->editarusuario($reg);
				header('Location: index.php?action=usuarios');
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}
						
		/*          COMPRAS           */
		
		public function compras(){
			//include "./model/compras_model.php";
			//$modelo_galeria = new Compras_model();	
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				include "./view/vistacompras.php";
				$vista = new Vistacompras();
				$vista->mostrar();
			}else{
				include './view/vistaindex.php';
				$vista = new Vistaindex();
				$vista->mostrar();
			}
		}

		/*          CONTACTO          */
		
		/*	LO MANDA POR MAIL AHORA
		
		public function comentarios(){
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
				include './view/vistacomentarios.php';
				include "./model/comentarios_model.php";
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
		
		public function borrarcomentarios(){
			include "./model/comentarios_model.php";
			include './view/vistacomentarios.php';
			$comentarios = new Comentarios_model();
			$vista = new Vistacomentarios();
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL && $_SESSION['admin'] = 1){
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
		*/
						
		/*          SESION          */    
		
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
				$_SESSION['admin'] = $consulta[0]['admin'];
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