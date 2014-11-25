<?php 
	class Controlador{
	
		/*          INDEX          */ 
	
		public function indice(){
			include './view/vistaindice.php';
			$vista = new Vistaindice();
			$vista->mostrar();
		}
		
		/*          BIOGRAFIA          */
		
		public function biografia(){
			include './view/vistabiografia.php';
			$vista = new Vistabiografia();
			$vista->mostrar();
		}
		
		/*          EVENTOS          */
		
		public function eventos(){
			include "./model/eventos_model.php";
			$modelo_lista = new Eventos_model();
			include './view/vistaeventos.php';
			$vista = new Vistaeventos();
			$vista->lista = $modelo_lista->load_eventos();
			$vista->mostrar();
		}
			
				/*     DETALLE EVENTOS     */
			
		public function detalleEventos(){
			include "./model/detalleEventos_model.php";
			$modelo_lista = new detalleEvento_model();
			include './view/vistadetalleEvento.php';
			$vista = new VistadetalleEvento();
			$r = $modelo_lista->load_detalleEvento($_GET['id']);
			$vista->mostrar($r[0]);
		}
		
		/*          GALERIA          */
		
		public function galeria(){
			include './view/vistagaleria.php';
			include '/model/galeria_model.php';
			$modelo = new Galeria_model();
			$vista = new Vistagaleria();
			$vista->lista = $modelo->load_categorias();
			$vista->mostrar();
		}
		
		public function fotoscategoria(){
			include "./model/fotos_model.php";
			$modelo_galeria = new Fotos_model();	
			include './view/vistafotos.php';
			$vista = new Vistafotos();
			$vista->galeria = $modelo_galeria->load_fotoscategoria($_GET['categoria']);
			$vista->mostrar();	
		}
		     
			 /*     FOTOS     */
		
		public function fotos(){
			include "./model/fotos_model.php";
			$modelo_galeria = new Fotos_model();	
			include './view/vistafotos.php';
			$vista = new Vistafotos();
			$vista->galeria = $modelo_galeria->load_fotos();
			$vista->mostrar();	
		}
		
		/*          CONTACTO          */

		public function contacto(){
			include './view/vistacontacto.php';
			$vista = new Vistacontacto();
			$vista->mostrar();
		}
		
		public function contactoExito(){
			include './view/vistacontactoExito.php';
			$vista = new VistacontactoExito();
			$vista->mostrar();
		}
		
		public function mail(){
			include './view/vistacontactoExito.php';
			include "./model/mail_model.php";
			$usuario = new Mail();
			$reg = array(':nombre'=>$_POST["nombre"], ':email'=>$_POST["email"], ':message'=>$_POST["message"]);
			$usuario->enviarmail($reg);
			$vista = new VistacontactoExito();
			$vista->mostrar();
		}
		
		/*          CARRITO          */
		
		public function carrito(){
			if($this->usuariologueado()){
				if(isset($_SESSION['carrito'])){
					include './view/vistacarrito.php';
					include "./model/carrito_model.php";
					include_once './model/fotos_model.php';
					$carrito = new Carrito_model();
					$vista = new Vistacarrito();
					$foto = new Fotos_model();
					$mostrar = array();
					foreach($_SESSION['carrito'] as $id => $producto){
						$consulta = $foto->load_fotografiaporid($id); //Guarda el query
						$mostrar[] = $consulta[0];
					}
					$vista->lista = $carrito->load_carrito();
					$vista->mostrar($mostrar);
				}else{
					include "./model/carrito_model.php";
					include './view/vistacarrito.php';
					$carrito = new Carrito_model();
					$vista = new Vistacarrito();
					$mostrar = array();
					$vista->lista = $carrito->load_carrito();					
					$vista->mostrar($mostrar);
				}
			}else{
				//Ofrecer login
			}
		}
		
		public function agregaracarrito(){
			if($this->usuariologueado()){
				if(!isset($_SESSION['carrito'])){
					$_SESSION['carrito'] = array();
				}
				$_SESSION['carrito'][$_REQUEST['idproducto']] = true; // Para que se cree
				var_dump($_SESSION['carrito']);
				
			}else{
				//Ofrecer login
			}
		}
		
		public function cargarcarrito(){
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				include "./model/GuardarRegistro_model.php";
				$usuario = new Usuario();
				$compra = array(':email'=>$_POST['email'], ':idfoto'=>$_POST['idfoto'], 'cant'=>$_POST['cant'], ':tarjeta'=>$_POST['tarjeta']);
				$usuario->hacercompra($compra);
				include './view/vistacarrito.php';
				header('Location: index.php?action=carrito');
			}else{
				include './view/vistalogin.php';
				$vista = new Vistalogin();
				$vista->mostrar();
			}
		}
		
		/*         SESION          */
		
		public function registro(){
			include './view/vistaregistro.php';
			$vista = new Vistaregistro();
			$vista->mostrar();
		}
		
		public function GuardarRegistro(){
			include './view/vistaGuardarRegistro.php';
			include "./model/GuardarRegistro_model.php";
			$usuario = new Usuario();
			$reg = array(':nombre'=>$_POST["nombre"], ':email'=>$_POST["email"], ':pass'=>$_POST["pass"]);
			$usuario->guardarusuario($reg);
			$vista = new VistaGuardarRegistro();
			$vista->mostrar();
			// Agregar tiempo de espera
			header('Location: index.php?action=login');
		}
		
		public function Ingresar(){
			include './view/vistaindice.php';
			include_once './model/GuardarRegistro_model.php';
			$reg = array(':email'=>$_POST["email"], ':pass'=>$_POST["pass"]);
			
			$v = new Usuario();

			$consulta = $v->verificarusuario($reg);
			
			if (count($consulta) == 0){
				header('Location: index.php?action=loginerror');
				exit();
			}else{
				$_SESSION['idusuario'] = $consulta[0]['id'];
				$_SESSION['nombre'] = $consulta[0]['nombre'];
				$vista = new Vistaindice();
				$vista->mostrar();
			}
		}
		
		public function login(){
			include './view/vistalogin.php';
			$vista = new Vistalogin();
			$vista->mostrar();
		}
		
		public function Logout(){
			include './view/vistaregistro.php';
				$_SESSION = array();
				session_destroy();
				$vista = new Vistaregistro();
				$vista->mostrar();
		}
		
		public function Loginerror(){
			include './view/vistaloginerror.php';
			$vista = new Vistaloginerror();
			$vista->mostrar();
			
		}
		
		protected function usuariologueado(){
			return (isset($_SESSION['idusuario']));
		}
	}
?>