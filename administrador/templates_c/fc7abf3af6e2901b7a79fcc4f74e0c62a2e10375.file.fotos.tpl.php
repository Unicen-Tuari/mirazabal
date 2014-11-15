<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 19:58:33
         compiled from ".\templates\fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12779544a5db5db1855-30296107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7abf3af6e2901b7a79fcc4f74e0c62a2e10375' => 
    array (
      0 => '.\\templates\\fotos.tpl',
      1 => 1416077908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12779544a5db5db1855-30296107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a5db5e83647_32822234',
  'variables' => 
  array (
    'lista' => 0,
    'fotos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a5db5e83647_32822234')) {function content_544a5db5e83647_32822234($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Modificar Eventos Programados</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> Id </th>
						<th> Categoria </th>
						<th> Titulo </th>
						<th> Descripcion </th>
						<th> Foto </th>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['fotos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fotos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fotos']->key => $_smarty_tpl->tpl_vars['fotos']->value) {
$_smarty_tpl->tpl_vars['fotos']->_loop = true;
?>
						<tbody>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['fotos']->value['id'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['fotos']->value['categoria'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['fotos']->value['titulo'];?>
 </p> </td>
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['fotos']->value['descripcion'];?>
 </p> </td> 
							<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['fotos']->value['archivo'];?>
 </p> </td>
						</tbody>
					<?php }
if (!$_smarty_tpl->tpl_vars['fotos']->_loop) {
?>
							<tbody>
								<td> <p class="eventos"> No hay fotos </p> </td>
							</tbody>
					<?php } ?>
				</table>
				<div class="row">
					<div>
						<input type="text" id='id' class="form-control" placeholder="id">
					</div> <br>
					
					<div>
						<input type="text" id='categoria' class="form-control" placeholder="categoria"> <br>
					</div> 
					
					<div>
						<input type="text" id='titulo' class="form-control" placeholder="titulo"> <br>
					</div> 
					
					<div>
						<input type="text" id='descripcion' class="form-control" placeholder="descripcion">
					</div> <br>
					
					<div>
						<input type=file id='archivo' class="form-control" id="archivo"> <br><br>
					</div> <br>
					
					<button type="button" id="agregar" class="btn btn-success"> Agregar </button>
					
					<button type="button" id="modificar" class="btn btn-primary"> Modificar </button>
					
					<button type="button" id="eliminar" class="btn btn-danger"> Eliminar </button>
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
