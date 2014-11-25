<?php 
	include_once ('Smarty-3.1.19/libs/Smarty.class.php');
	class View {

		public $smarty;
	
		function __construct(){
		$this->smarty = new Smarty;
		$this->smarty->assign('log', isset($_SESSION['idusuario']) ? true : false);
		$this->smarty->assign('nombre', isset($_SESSION['nombre']) ? $_SESSION['nombre'] : false);
		}
	}
?>