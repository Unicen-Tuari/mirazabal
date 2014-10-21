<?php
require('C:\xampp\htdocs\valentinaetulain.com.ar\Smarty-3.1.19\libs\Smarty.class.php');

$smarty = new Smarty;
$smarty->assign('id', $eventos);
$smarty->display('index.tpl');
?>