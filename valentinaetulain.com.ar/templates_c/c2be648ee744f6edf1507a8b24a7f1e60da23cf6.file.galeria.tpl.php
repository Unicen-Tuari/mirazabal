<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 23:30:33
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284515473aa48d0ca53-54263862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2be648ee744f6edf1507a8b24a7f1e60da23cf6' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1416868230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284515473aa48d0ca53-54263862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473aa48d9a016_82489397',
  'variables' => 
  array (
    'lista' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473aa48d9a016_82489397')) {function content_5473aa48d9a016_82489397($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="galeria">
	<div class="row">
		<div id="contenido">
			<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
				<button class="img-galeria" id-botoncargar="cargar" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"> <img class="img-galeria" src="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['archivo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
 </button>
			<?php }
if (!$_smarty_tpl->tpl_vars['categoria']->_loop) {
?>
				No hay eventos
			<?php } ?>
		</div>
	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
