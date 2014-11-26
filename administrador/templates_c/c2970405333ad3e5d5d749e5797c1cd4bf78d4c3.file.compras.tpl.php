<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 12:46:29
         compiled from ".\templates\compras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14151544a64a5be1911-71829586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2970405333ad3e5d5d749e5797c1cd4bf78d4c3' => 
    array (
      0 => '.\\templates\\compras.tpl',
      1 => 1417002374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14151544a64a5be1911-71829586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a64a5c42ce1_07996110',
  'variables' => 
  array (
    'lista' => 0,
    'compras' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a64a5c42ce1_07996110')) {function content_544a64a5c42ce1_07996110($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Compras hechas </h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> Usuario </th>
						<th> Foto </th>
						<th> Titulo </th>
						<th> Cantidad </th>
						<th> Costo </th>
						<th> Fecha de Compra </th>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['compras'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compras']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compras']->key => $_smarty_tpl->tpl_vars['compras']->value) {
$_smarty_tpl->tpl_vars['compras']->_loop = true;
?>
						<tbody>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['compras']->value['mail'];?>
 </p> </td>
							<td> <p> <img src="<?php echo $_smarty_tpl->tpl_vars['compras']->value['archivo'];?>
" alt ="imagen db" /> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['compras']->value['titulo'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['compras']->value['cantidad'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['compras']->value['precio'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['compras']->value['fechacompra'];?>
 </p> </td>
						</tbody>
					<?php }
if (!$_smarty_tpl->tpl_vars['compras']->_loop) {
?>
						<tbody>
							<td> <p class="eventos"> No hay Compras </p> </td>
						</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
