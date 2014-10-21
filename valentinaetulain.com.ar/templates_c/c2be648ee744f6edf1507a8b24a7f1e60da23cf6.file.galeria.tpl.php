<?php /* Smarty version Smarty-3.1.19, created on 2014-10-21 20:01:45
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:850854433fdf275911-91665086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2be648ee744f6edf1507a8b24a7f1e60da23cf6' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1413914488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '850854433fdf275911-91665086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54433fdf2d55c4_03053281',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54433fdf2d55c4_03053281')) {function content_54433fdf2d55c4_03053281($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="galeria">
	<div class="row">
		<div id="contenido">
			<button id="cargar"> <img src="imagenes/galeria.jpg"> </button>
		</div>
	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
