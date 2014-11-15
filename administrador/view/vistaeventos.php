<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class Vistaeventos {
			
		public $lista;
		
		public function mostrar(){
			$smarty = new Smarty();
			$smarty->assign('lista', $this->lista);
			$smarty->display('eventos.tpl');			
		}
	}
?>