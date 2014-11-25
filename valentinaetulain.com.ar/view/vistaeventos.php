<?php 
	include_once 'view/view.php';
	
	class Vistaeventos extends View {
	
		public $lista;
		
		public function mostrar(){
			$this->smarty->assign('lista', $this->lista);
			$this->smarty->display('eventos.tpl');			
		}
	}
?>