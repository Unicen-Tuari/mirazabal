<?php /* Smarty version Smarty-3.1.19, created on 2014-09-09 21:43:58
         compiled from "template\eventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:813253fbb902242b80-24851796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd24cd1addb573c13deefb739976a0cd291357c' => 
    array (
      0 => 'template\\eventos.tpl',
      1 => 1410291835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813253fbb902242b80-24851796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fbb9022aca24_73348482',
  'variables' => 
  array (
    'lista' => 0,
    'eventos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbb9022aca24_73348482')) {function content_53fbb9022aca24_73348482($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="eventos">
			
	<h1> Proximos Eventos..!! </h1>
	<fieldset>
		<div class="eventos">
			<?php  $_smarty_tpl->tpl_vars['eventos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eventos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eventos']->key => $_smarty_tpl->tpl_vars['eventos']->value) {
$_smarty_tpl->tpl_vars['eventos']->_loop = true;
?>
				<a href="detalleEvento.php?id=<?php echo $_smarty_tpl->tpl_vars['eventos']->value['id'];?>
"> 
					<p> <?php echo $_smarty_tpl->tpl_vars['eventos']->value['descripcion'];?>
 </p> 
				</a>
			<?php }
if (!$_smarty_tpl->tpl_vars['eventos']->_loop) {
?>
				No hay eventos
			<?php } ?>
		</div>			
	</fieldset>

</section>
<?php echo $_smarty_tpl->getSubTemplate ("template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
