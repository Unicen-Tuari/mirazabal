<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 20:57:03
         compiled from ".\templates\eventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27221544a5735d24995-88274258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7602e05f908791aedaf122bc45fbd56f0f7769f' => 
    array (
      0 => '.\\templates\\eventos.tpl',
      1 => 1416859014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27221544a5735d24995-88274258',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a5735d85f64_35975271',
  'variables' => 
  array (
    'lista' => 0,
    'comentarios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a5735d85f64_35975271')) {function content_544a5735d85f64_35975271($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
<br><br><br><br><br><br><br><br>
<div class="panel panel-default">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"> Eventos Programados</h3>
		</div>
			<div class="panel-body">
				<table class="table table-striped">
				<thead>
					<th> Id </th>
					<th> Administrador </th>
					<th> Pais </th>
					<th> Loacalidad </th>
					<th> Hora </th>
					<th> Descipcion </th>
					
				</thead>
				<?php  $_smarty_tpl->tpl_vars['comentarios'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentarios']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentarios']->key => $_smarty_tpl->tpl_vars['comentarios']->value) {
$_smarty_tpl->tpl_vars['comentarios']->_loop = true;
?>
					<tbody>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['id'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['administrador'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['pais'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['localidad'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['hora'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['comentarios']->value['descripcion'];?>
 </p> </td>
						<td> <button type=button data-toggle="modal" data-target="#Modal2"> <a href="#Modal2"> Editar </a> </button> </td>
						<td> <input type="button" value="Eliminar" onClick="location.href = 'index.php?action=eliminarevento&id=<?php echo $_smarty_tpl->tpl_vars['comentarios']->value['id'];?>
'"> </td>
					</tbody>
				<?php }
if (!$_smarty_tpl->tpl_vars['comentarios']->_loop) {
?>
						<tbody>
							<td> <p class="eventos"> No hay Comentarios </p> </td>
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
									<input type="hidden" name="action" value="agregarevento"/>
									<div class="row">
										<div>
											<input type="text" name='administrador' id='administrador' class="form-control" placeholder="Administrador"> <br>
										</div> 
											
										<div>
											<input type="text" name='pais' id='pais' class="form-control" placeholder="Pais"> <br>
										</div> 
										
										<div>
											<input type="text" name='localidad' id='localidad' class="form-control" placeholder="Localidad">
										</div> <br>
										
										<div>
											<input type="text" name='fecha' id='fecha' class="form-control" placeholder="aaaa-mm-dd">
										</div> <br>
										
										<div>
											<input type="text" name='hora' id='hora'  class="form-control" placeholder="hora">
										</div> <br>
										
										<div>
											<input type="text" name='descripcion' id='descripcion' class="form-control" placeholder="Descripcion">
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
											<input type="hidden" name="action" value="editarevento"/>
											<div class="row">
												<div>
													<input type="text" name='id' id='id' class="form-control" placeholder="id"> <br>
												</div> 
											
												<div>
													<input type="text" name='administrador' id='administrador' class="form-control" placeholder="Administrador"> <br>
												</div> 
													
												<div>
													<input type="text" name='pais' id='pais' class="form-control" placeholder="Pais"> <br>
												</div> 
												
												<div>
													<input type="text" name='localidad' id='localidad' class="form-control" placeholder="Localidad">
												</div> <br>
												
												<div>
													<input type="text" name='fecha' id='fecha' class="form-control" placeholder="aaaa-mm-dd">
												</div> <br>
												
												<div>
													<input type="text" name='hora' id='hora'  class="form-control" placeholder="hora">
												</div> <br>
												
												<div>
													<input type="text" name='descripcion' id='descripcion' class="form-control" placeholder="Descripcion">
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
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
