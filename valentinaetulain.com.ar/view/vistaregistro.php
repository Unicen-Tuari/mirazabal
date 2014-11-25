<?php 
	include_once 'view/view.php';
	
	class Vistaregistro extends View{
		public function mostrar(){
			$this->smarty->display('registro.tpl');			
		}
	}
?>