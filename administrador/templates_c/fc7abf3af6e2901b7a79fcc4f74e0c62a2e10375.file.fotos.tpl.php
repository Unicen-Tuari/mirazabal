<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 00:40:11
         compiled from ".\templates\fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12779544a5db5db1855-30296107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7abf3af6e2901b7a79fcc4f74e0c62a2e10375' => 
    array (
      0 => '.\\templates\\fotos.tpl',
      1 => 1416872406,
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
				<h3 class="panel-title"> Fotos colgadas en la web </h3>
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
							<td> <p> <img src="<?php echo $_smarty_tpl->tpl_vars['fotos']->value['archivo'];?>
" alt ="imagen db" /> </td>
							<td> <button type=button data-toggle="modal" data-target="#Modal2"> <a href="#Modal2"> Editar </a> </button> </td>
							<td> <input type="button" value="Eliminar" onClick="location.href = 'index.php?action=eliminarfoto&id=<?php echo $_smarty_tpl->tpl_vars['fotos']->value['id'];?>
'"> </td>
						</tbody>
					<?php }
if (!$_smarty_tpl->tpl_vars['fotos']->_loop) {
?>
							<tbody>
								<td> <p class="eventos"> No hay fotos </p> </td>
							</tbody>
					<?php } ?>
				</table>
				<button class="btn btn-default" data-toggle="modal" data-target="#Modal"> <a href="#Modal"> Agregar </a> </button>
				<!-- Modal -->
				<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title"> Complete siguientes campos:</h4>
							</div>
							<div class="modal-body">
								<form method="POST">
									<input type="hidden" name="action" value="agregarfoto"/>
									<div class="row">						
										<div>
											<input type="text" id='titulo' name='titulo' class="form-control" placeholder="titulo"> <br>
										</div> 
										
										<div>
											<input type="text" id='categoria' name='categoria' class="form-control" placeholder="categoria"> <br>
										</div> 
																				
										<div>
											<input type="text" id='descripcion' name='descripcion' class="form-control" placeholder="descripcion">
										</div> <br>
										
										<div>
											<input type="text" id='costo' name='costo' class="form-control" placeholder="costo">
										</div> <br>
										
										<div>
											<input type=file id='archivo' name='archivo' class="form-control"> <br><br>
										</div> <br>
										
										<input value = "Agregar" class="btn btn-success" type = "submit" >
									
									</div>
								</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- Modal -->
						<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title"> Complete siguientes campos:</h4>
									</div>
									<div class="modal-body">
										<form method="POST">
											<input type="hidden" name="action" value="editarfoto"/>
											<div class="row">						
												<div>
													<input type="text" id='id' name='id' class="form-control" placeholder="id"> <br>
												</div>
												
												<div>
													<input type="text" id='titulo' name='titulo' class="form-control" placeholder="titulo"> <br>
												</div> 
												
												<div>
													<input type="text" id='categoria' name='categoria' class="form-control" placeholder="categoria"> <br>
												</div> 
																						
												<div>
													<input type="text" id='descripcion' name='descripcion' class="form-control" placeholder="descripcion">
												</div> <br>
												
												<div>
													<input type="text" id='costo' name='costo' class="form-control" placeholder="costo">
												</div> <br>
												
												<div>
													<input type=file id='archivo' name='archivo' class="form-control" id="archivo"> <br><br>
												</div> <br>
												
												<input value = "Editar" class="btn btn-success" type = "submit" > 
											</div>
										</form>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
