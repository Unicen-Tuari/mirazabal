<?php 
	include_once 'view/view.php';
	
	class Vistalogin extends View {
		public function mostrar(){
			$this->smarty->display('login.tpl');			
		}
	}
?>