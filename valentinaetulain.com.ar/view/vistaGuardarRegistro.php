<?php 
	include_once 'view/view.php';
	
	class VistaGuardarRegistro extends View {
		public function mostrar(){
			$this->smarty->display('contactoreg.tpl');			
		}
	}
?>