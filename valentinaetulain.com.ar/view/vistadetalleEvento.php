<?php 
	include_once 'view/view.php';
	
	class VistadetalleEvento extends View {
	
		public $id;
		
		public function mostrar($r){
			$this->smarty->assign('evento', $r);
			$this->smarty->display('detalleEvento.tpl');			
		}
	}
?>