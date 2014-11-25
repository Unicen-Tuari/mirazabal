<?php 
	include_once 'view/view.php';
	
	class Vistaindice extends View{
		public function mostrar(){
			$this->smarty->display('index.tpl');			
		}
	}
?>