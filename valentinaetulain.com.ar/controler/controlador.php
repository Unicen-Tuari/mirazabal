<?php 
	class Controlador{
		public function indice(){
			include './view/vistaindice.php';
			$vista = new Vistaindice();
			$vista->mostrar();
		}
		
		public function biografia(){
			include './view/vistabiografia.php';
			$vista = new Vistabiografia();
			$vista->mostrar();
		}
		
		public function eventos(){
			include "./model/eventos_model.php";
			$modelo_lista = new Eventos_model();
		
			include './view/vistaeventos.php';
			$vista = new Vistaeventos();
			$vista->lista = $modelo_lista->load_eventos();
			$vista->mostrar();
		}
		
		public function detalleEventos(){
			include "./model/detalleEventos_model.php";
			$modelo_lista = new detalleEvento_model();
			include './view/vistadetalleEvento.php';
			$vista = new VistadetalleEvento();
			$r = $modelo_lista->load_detalleEvento($_GET['id']);
			$vista->mostrar($r[0]);
		}
		
		public function galeria(){
			include './view/vistagaleria.php';
			$vista = new Vistagaleria();
			$vista->mostrar();
		}
		
		public function fotos(){
			include "./model/fotos_model.php";
			$modelo_galeria = new Fotos_model();	
			include './view/vistafotos.php';
			$vista = new Vistafotos();
			$vista->galeria = $modelo_galeria->load_fotos();
			$vista->mostrar();	
		}
		
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
		
		public function carrito(){
			include './view/vistacarrito.php';
			$vista = new Vistacarrito();
			$vista->mostrar();
		}
		
		public function registro(){
			include './view/vistaregistro.php';
			$vista = new Vistaregistro();
			$vista->mostrar();
		}
	}
?>