<?php 
	include_once 'view/view.php';
	
	class Vistabiografia extends View{
		public function mostrar(){
		$this->smarty->display('biografia.tpl');			
		}
	}
	
?>