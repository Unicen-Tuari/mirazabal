<?php /* Smarty version Smarty-3.1.19, created on 2014-09-09 22:15:35
         compiled from "template\fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3157453fd17a1e7b205-03067982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6d9582658228f77aaa506b80fe329c780618bbc' => 
    array (
      0 => 'template\\fotos.tpl',
      1 => 1410293719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3157453fd17a1e7b205-03067982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fd17a21438c0_16894071',
  'variables' => 
  array (
    'galeria' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fd17a21438c0_16894071')) {function content_53fd17a21438c0_16894071($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>
				
	<div id="cabecera">
		<h2> Mira mis fotos </h2>
	</div class="galeria">
				
	<div id="galeria-small">
		<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
						
			<a href="visor.php?id=<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
" >
				<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['archivo'];?>
" alt ="imagen" />
			</a>
		<?php }
if (!$_smarty_tpl->tpl_vars['img']->_loop) {
?>
			No hay imagenes
		<?php } ?>
	</div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
