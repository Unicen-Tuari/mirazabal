<?php /* Smarty version Smarty-3.1.19, created on 2014-10-19 04:51:23
         compiled from ".\templates\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265555443272b4edc76-35876024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b3ebeb631e3623bf7ad5c86c47e8686a83b60f' => 
    array (
      0 => '.\\templates\\carrito.tpl',
      1 => 1412673604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265555443272b4edc76-35876024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5443272b5c06f2_30358354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5443272b5c06f2_30358354')) {function content_5443272b5c06f2_30358354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th> Producto </th>
					<th> Titulo </th>
					<th> Cantidad </th>
					<th> Costo Unitario </th>
					<th> Costo Total </th>
				</tr>
			</thead>
				<tbody>	
						<tr>
								<td> <img class="carrito" src="imagenes/1.jpg"> </td>
								<td> Paisaje </td>
								<td> 1 </td>
								<td> $2.000.000 </td>
								<td> $2.000.000 </td>
						</tr>
				</tbody>
		</table>
	</div>	
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
