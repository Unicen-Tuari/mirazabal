<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class VistadetalleEvento {
	
		public $id;
		
		public function mostrar($r){
			$smarty = new Smarty();
			$smarty->assign('evento', $r);
			$smarty->display('detalleEvento.tpl');			
		}
	}
?>