<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 11:21:10
         compiled from ".\templates\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294285433a41a62fb57-28529004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01af487a9bb551c1c5e8be332f9795a8ae02bcbd' => 
    array (
      0 => '.\\templates\\carrito.tpl',
      1 => 1412673604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294285433a41a62fb57-28529004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5433a41a68e8c7_40446192',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433a41a68e8c7_40446192')) {function content_5433a41a68e8c7_40446192($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
