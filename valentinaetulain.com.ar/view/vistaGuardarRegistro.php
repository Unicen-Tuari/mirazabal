<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class VistaGuardarRegistro {
		public function mostrar(){
			$smarty = new Smarty();
			$smarty->display('contactoreg.tpl');			
		}
	}
?>