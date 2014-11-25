<?php 
	include_once 'view/view.php';
	
	class Vistaloginerror extends View{
		public function mostrar(){
			$smarty->display('loginerror.tpl');			
		}
	}
?>