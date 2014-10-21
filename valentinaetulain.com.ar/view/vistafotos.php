<?php 
	require('Smarty-3.1.19/libs/Smarty.class.php');
	
	class Vistafotos {
	
	    public $galeria;
		
		public function mostrar(){
			$smarty = new Smarty();
			$smarty->assign('galeria', $this->galeria);
			$smarty->display('fotos.tpl');			
		}
	}
?>