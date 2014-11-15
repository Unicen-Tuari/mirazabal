<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class Vistacompras {
			
		public function mostrar(){
			$smarty = new Smarty();
			$smarty->display('compras.tpl');			
		}
	}
?>