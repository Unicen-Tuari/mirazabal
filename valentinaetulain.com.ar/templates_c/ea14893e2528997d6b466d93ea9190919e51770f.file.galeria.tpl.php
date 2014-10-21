<?php /* Smarty version Smarty-3.1.19, created on 2014-10-19 05:10:10
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3151544329c6efc5e7-21525469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea14893e2528997d6b466d93ea9190919e51770f' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1413688204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3151544329c6efc5e7-21525469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544329c7005ed3_87394043',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544329c7005ed3_87394043')) {function content_544329c7005ed3_87394043($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="galeria">
	<div class="row">
		<div id="contenido">
			<button id="cargar"> <img src="imagenes/galeria.jpg"> </button>
		</div>
	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
