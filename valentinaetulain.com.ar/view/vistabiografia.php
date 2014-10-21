<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class Vistabiografia{
		public function mostrar(){
			$smarty = new Smarty();
			$smarty->display('biografia.tpl');			
		}
	}
	
?>