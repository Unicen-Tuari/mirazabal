<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 17:01:03
         compiled from ".\templates\compras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14151544a64a5be1911-71829586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2970405333ad3e5d5d749e5797c1cd4bf78d4c3' => 
    array (
      0 => '.\\templates\\compras.tpl',
      1 => 1414162857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14151544a64a5be1911-71829586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a64a5c42ce1_07996110',
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
						<th> Producto </th>
						<th> Titulo </th>
						<th> Cantidad </th>
						<th> Total </th>
					</thead>
					<tbody>
						<td> mirazabal1@gmail.com </td>
						<td> Foto </td>
						<td> Algun titulo </td>
						<td> Muchas </td>
						<td> $$$ </td>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
