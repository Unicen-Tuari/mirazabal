<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:13:22
         compiled from ".\templates\comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19379546784013725c7-20085762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0141eeb53d87ef9896150e5efcb24f310dead607' => 
    array (
      0 => '.\\templates\\comentarios.tpl',
      1 => 1416071597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19379546784013725c7-20085762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467840155dec1_21806937',
  'variables' => 
  array (
    'lista' => 0,
    'comentarios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467840155dec1_21806937')) {function content_5467840155dec1_21806937($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Comentarios </h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> Id </th>
						<th> Nombre </th>
						<th> E-mail </th>
						<th> Mensaje </th>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['comentarios'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentarios']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentarios']->key => $_smarty_tpl->tpl_vars['comentarios']->value) {
$_smarty_tpl->tpl_vars['comentarios']->_loop = true;
?>
						<tbody>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['id'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['nombre'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['email'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['message'];?>
 </p> </td> 
						</tbody>
					<?php }
if (!$_smarty_tpl->tpl_vars['comentarios']->_loop) {
?>
							<tbody>
								<td> <p class="eventos"> No hay Comentarios </p> </td>
							</tbody>
					<?php } ?>
				</table>
				<div>
					<input type="text" id='id' class="form-control" placeholder="ID">
				</div> <br>
				<button id="borrar" class="btn btn-danger" onclick="location.href='index.php?action=borrarcomentarios'">  Borrar  </button> </a>
			</div>	
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
