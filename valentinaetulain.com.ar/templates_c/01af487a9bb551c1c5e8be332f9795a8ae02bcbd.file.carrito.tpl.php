<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 01:13:58
         compiled from ".\templates\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231675473b1eb115af9-68750280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01af487a9bb551c1c5e8be332f9795a8ae02bcbd' => 
    array (
      0 => '.\\templates\\carrito.tpl',
      1 => 1416960820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231675473b1eb115af9-68750280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473b1eb1a47a2_69796665',
  'variables' => 
  array (
    'lista' => 0,
    'compra' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473b1eb1a47a2_69796665')) {function content_5473b1eb1a47a2_69796665($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th> Producto </th>
					<th> Titulo </th>
					<th> Cantidad </th>
					<th> Costo </th>
				</tr>
			</thead>
				<tbody>	
					<?php  $_smarty_tpl->tpl_vars['compra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compra']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compra']->key => $_smarty_tpl->tpl_vars['compra']->value) {
$_smarty_tpl->tpl_vars['compra']->_loop = true;
?>
						<tr>
							<td> <img class="carrito" src="imagenes/<?php echo $_smarty_tpl->tpl_vars['compra']->value['id'];?>
.jpg"> </td>
							<td> <?php echo $_smarty_tpl->tpl_vars['compra']->value['titulo'];?>
 </td>
							<td> 1 </td>
							<td> <?php echo $_smarty_tpl->tpl_vars['compra']->value['costo'];?>
 </td>
						</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars['compra']->_loop) {
?>
						<tr>
							<td> No realizo compras aun </td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<input type="button" value="Comprar" onClick="location.href = 'index.php?action=compra'">
	</div>	
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
