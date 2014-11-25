<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class Vistausuarios {
		
		public $lista;
		
		public function mostrar(){
			$smarty = new Smarty();
			$smarty->assign('lista', $this->lista);
			$smarty->display('usuarios.tpl');			
		}
	}
?>