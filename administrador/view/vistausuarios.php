<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class Vistausuarios {
			
		public function mostrar(){
			$smarty = new Smarty();
			$smarty->display('usuarios.tpl');			
		}
	}
?>