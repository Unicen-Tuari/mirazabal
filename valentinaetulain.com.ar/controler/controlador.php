<?php 
	class Controlador{
	
		/*          INDEX          */ 
	
		public function indice(){
			include_once './view/vistaindice.php';
			$vista = new Vistaindice();
			$vista->mostrar();
		}
		
		/*          BIOGRAFIA          */
		
		public function biografia(){
			include_once './view/vistabiografia.php';
			$vista = new Vistabiografia();
			$vista->mostrar();
		}
		
		/*          EVENTOS          */
		
		public function eventos(){
			include_once "./model/eventos_model.php";
			$modelo_lista = new Eventos_model();
			include_once './view/vistaeventos.php';
			$vista = new Vistaeventos();
			$vista->lista = $modelo_lista->load_eventos();
			$vista->mostrar();
		}
			
				/*     DETALLE EVENTOS     */
			
		public function detalleEventos(){
			include_once "./model/detalleEventos_model.php";
			$modelo_lista = new detalleEvento_model();
			include_once './view/vistadetalleEvento.php';
			$vista = new VistadetalleEvento();
			$r = $modelo_lista->load_detalleEvento($_GET['id']);
			$vista->mostrar($r[0]);
		}
		
		/*          GALERIA          */
		
		public function galeria(){
			include_once './view/vistagaleria.php';
			include_once '/model/galeria_model.php';
			$modelo = new Galeria_model();
			$vista = new Vistagaleria();
			$vista->lista = $modelo->load_categorias();
			$vista->mostrar();
		}
		
		public function fotoscategoria(){
			include_once "./model/fotos_model.php";
			$modelo_galeria = new Fotos_model();	
			include_once './view/vistafotos.php';
			$vista = new Vistafotos();
			$vista->galeria = $modelo_galeria->load_fotoscategoria($_GET['categoria']);
			$vista->mostrar();	
		}
		     
			 /*     FOTOS     */
		
		public function fotos(){
			include_once "./model/fotos_model.php";
			$modelo_galeria = new Fotos_model();	
			include_once './view/vistafotos.php';
			$vista = new Vistafotos();
			$vista->galeria = $modelo_galeria->load_fotos();
			$vista->mostrar();	
		}
		
		/*          CONTACTO          */

		public function contacto(){
			include_once './view/vistacontacto.php';
			$vista = new Vistacontacto();
			$vista->mostrar();
		}
		
		public function contactoExito(){
			include_once './view/vistacontactoExito.php';
			$vista = new VistacontactoExito();
			$vista->mostrar();
		}
		
		/*          MAIL          */
		
		public function mail(){
			include_once './view/vistacontactoExito.php';
			$msg = null;
			if (isset($_POST["phpmailer"])){
				
				$nombre = $_POST['nombre'];
				$dest = $_POST["email"];
				$email = 'matuira_aya@hotmail.com';
				$mensaje = $_POST["message"];
				$asunto = 'Correo enviado desde la pagina web' ;
				
				require "phpmailer/PHPMailerAutoload.php";
			
				$mail = new PHPMailer;
				  
				//indico a la clase que use SMTP
				$mail->IsSMTP();
				  
				//permite modo debug para ver mensajes de las cosas que van ocurriendo
				//$mail->SMTPDebug = 2;

				//Debo de hacer autenticación SMTP
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "ssl";

				//indico el servidor de Gmail para SMTP
				$mail->Host = "smtp.gmail.com";

				//indico el puerto que usa Gmail
				$mail->Port = 465;

				//indico un usuario / clave de un usuario de gmail
				$mail->Username = "mirazabal.94@gmail.com";
				$mail->Password = "matu37985534";
			   
				$mail->From = $email;
				
				$mail->FromName = $nombre;
				
				$mail->Subject = $asunto.' por '.$dest;
			   
				$mail->addAddress($email, $nombre);
				
				$mail->MsgHTML($mensaje);
					 
				if($mail->Send()){
					$vista = new VistacontactoExito();
					$vista->mostrar();
				}else{
					echo "Lo siento, ha habido un error al enviar el mensaje a $email";
					
				}
			}
		}
		
		/*          CARRITO          */
		
		public function carrito(){
			if($this->usuariologueado()){
				if(isset($_SESSION['carrito'])){
					include_once './view/vistacarrito.php';
					include_once "./model/carrito_model.php";
					include_once './model/fotos_model.php';
					
					$_carrito = new Carrito_model();
					$vista = new Vistacarrito();
					$foto = new Fotos_model();
					$mostrar = array();
					foreach($_SESSION['carrito'] as $id => $producto){
						$consulta = $foto->load_fotografiaporid($id); //Guarda el query
						$mostrar[] = $consulta[0];
					}
					
					$vista->mostrar($mostrar);
				}else{
					include_once "./model/carrito_model.php";
					include_once './view/vistacarrito.php';
					$carrito = new Carrito_model();
					$vista = new Vistacarrito();
					$mostrar = array();
					$vista->mostrar($mostrar);
				}
			}else{
				echo '404 Not Found, ';
				echo 'Access Denied';
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
				//Agregar redireccion por ajax
			}
		}
		
		public function compra(){
			include_once './model/fotos_model.php';
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				if(isset( $_SESSION['carrito']) && count($_SESSION['carrito']) >0){				
					include_once "./model/compras_model.php";
					$usuario = new Compras();
					$id_compra = $usuario->nuevacompra($_SESSION['idusuario']); //Guarda en la variable el id de la compra
					$foto = new Fotos_model();
					foreach($_SESSION['carrito'] as $id => $producto){
						$consulta = $foto->load_fotografiaporid($id); //Guarda el query //Recupero los atributos de la compra
						$usuario->insertenlineadecompra($id_compra, $consulta[0]['id'], $consulta[0]['costo']);
					}
					unset($_SESSION['carrito']); // Limpio el carrito de compras
					// Mensaje compra realizada con exito
			    }else{
				}
				
			} else{
				include_once './view/vistalogin.php';
				$vista = new Vistalogin();
				$vista->mostrar();
			}
		}
		
		public function cargarcarrito(){
			if(isset($_SESSION['idusuario']) && $_SESSION['idusuario'] != NULL){
				include_once "./model/GuardarRegistro_model.php";
				$usuario = new Usuario();
				$compra = array(':email'=>$_POST['email'], ':idfoto'=>$_POST['idfoto'], 'cant'=>$_POST['cant'], ':tarjeta'=>$_POST['tarjeta']);
				$usuario->hacercompra($compra);
				include_once './view/vistacarrito.php';
				header('Location: index.php?action=carrito');
			}else{
				include_once './view/vistalogin.php';
				$vista = new Vistalogin();
				$vista->mostrar();
			}
		}
		
		/*         SESION          */
		
		public function registro(){
			include_once './view/vistaregistro.php';
			$vista = new Vistaregistro();
			$vista->mostrar();
		}
		
		public function GuardarRegistro(){
			include_once './view/vistaGuardarRegistro.php';
			include_once "./model/GuardarRegistro_model.php";
			$usuario = new Usuario();
			$reg = array(':nombre'=>$_POST["nombre"], ':email'=>$_POST["email"], ':pass'=>$_POST["pass"]);
			$usuario->guardarusuario($reg);
			$vista = new VistaGuardarRegistro();
			$vista->mostrar();
			// Agregar tiempo de espera
			header('Location: index.php?action=login');
		}
		
		public function Ingresar(){
			include_once './view/vistaindice.php';
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
			include_once './view/vistalogin.php';
			$_SESSION = array();
			session_destroy();
			$vista = new Vistalogin();
			$vista->mostrar();
		}
		
		public function Logout(){
			include_once './view/vistalogin.php';
				$_SESSION = array();
				session_destroy();
				$vista = new Vistalogin();
				$vista->mostrar();
		}
		
		public function Loginerror(){
			include_once './view/vistaloginerror.php';
			$vista = new Vistaloginerror();
			$vista->mostrar();
			
		}
		
		protected function usuariologueado(){
			return (isset($_SESSION['idusuario']));
		}
	}
?>