<?php /* Smarty version Smarty-3.1.19, created on 2014-10-21 17:00:48
         compiled from ".\templates\eventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4875542aedc82fab97-36769847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff8da64bb33744ddeeb865fedc7ff6c549b3d84d' => 
    array (
      0 => '.\\templates\\eventos.tpl',
      1 => 1413903625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4875542aedc82fab97-36769847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542aedc840a957_22789540',
  'variables' => 
  array (
    'lista' => 0,
    'eventos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542aedc840a957_22789540')) {function content_542aedc840a957_22789540($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<div class="content">
		<div class="row">						
			<div class="eventos">
				<h1> Proximos Eventos..!! </h1>
			</div>
			<div class="conten1">
				<?php  $_smarty_tpl->tpl_vars['eventos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eventos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eventos']->key => $_smarty_tpl->tpl_vars['eventos']->value) {
$_smarty_tpl->tpl_vars['eventos']->_loop = true;
?>
					<a href="index.php?action=detalleEvento&id=<?php echo $_smarty_tpl->tpl_vars['eventos']->value['id'];?>
"> 
						<p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['eventos']->value['descripcion'];?>
 </p>
					</a>
				<?php }
if (!$_smarty_tpl->tpl_vars['eventos']->_loop) {
?>
					No hay eventos
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
