<?php 
	include_once 'view/view.php';
	
	class Vistaloginerror extends View{
		public function mostrar(){
			$this->smarty->display('loginerror.tpl');			
		}
	}
?>