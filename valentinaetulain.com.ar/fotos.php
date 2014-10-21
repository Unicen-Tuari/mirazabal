<?php
require('C:\xampp\htdocs\valentinaetulain.com.ar\Smarty-3.1.19\libs\Smarty.class.php');

$smarty = new Smarty;
$smarty->assign('galeria', $imagenes);
$smarty->display('fotos.tpl');
?>