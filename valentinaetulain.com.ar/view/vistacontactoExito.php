<?php 
	include_once 'view/view.php';
	
	class VistacontactoExito  extends View {
		public function mostrar(){
			$this->smarty->display('contactoExito.tpl');			
		}
	}
?>