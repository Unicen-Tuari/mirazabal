<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 23:20:12
         compiled from ".\templates\detalleEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183075473af1c7f3ce7-20415213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71a6eb330012c4ecb7b6e86a242fe910fe2a0f9b' => 
    array (
      0 => '.\\templates\\detalleEvento.tpl',
      1 => 1413915925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183075473af1c7f3ce7-20415213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473af1c88fe35_41403992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473af1c88fe35_41403992')) {function content_5473af1c88fe35_41403992($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<div class="content">
		<div class="row">						
			<div class="eventos">
				<h1> Proximos Eventos..!! </h1>
			</div>
			<div class="conten1">
				</a>
					<p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['evento']->value['pais'];?>
 - <?php echo $_smarty_tpl->tpl_vars['evento']->value['localidad'];?>
 - <?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha'];?>
 - <?php echo $_smarty_tpl->tpl_vars['evento']->value['hora'];?>
 hs - <?php echo $_smarty_tpl->tpl_vars['evento']->value['descripcion'];?>
 </p> 
				</a>
			</div>
		</div>			
	</div>			
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
