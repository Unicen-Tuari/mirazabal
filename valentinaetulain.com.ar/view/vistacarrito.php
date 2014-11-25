<?php 
	include_once 'view/view.php';
	
	class Vistacarrito extends View{
	
		public function mostrar($lista){
			$this->smarty->assign('lista', $lista);
			$this->smarty->display('carrito.tpl');			
		}
	}
?>