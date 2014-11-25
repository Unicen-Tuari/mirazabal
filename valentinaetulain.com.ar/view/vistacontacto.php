<?php 
	include_once 'view/view.php';
	
	class Vistacontacto  extends View {
		public function mostrar(){
			$this->smarty->display('contacto.tpl');			
		}
	}
?>