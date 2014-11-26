<?php 
	include_once 'view/view.php';
	
	class CompraExito  extends View {
		public function mostrar(){
			$this->smarty->display('compraExito.tpl');			
		}
	}
?>