<?php 
	include_once 'view/view.php';
	
	class Vistafotos extends View {
	
	    public $galeria;
		
		public function mostrar(){
			$this->smarty->assign('galeria', $this->galeria);
			$this->smarty->display('fotos.tpl');			
		}
	}
?>