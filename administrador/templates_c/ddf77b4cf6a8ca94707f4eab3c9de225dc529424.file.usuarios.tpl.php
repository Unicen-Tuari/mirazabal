<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 20:55:17
         compiled from ".\templates\usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28523544a6202afe6f8-93718783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddf77b4cf6a8ca94707f4eab3c9de225dc529424' => 
    array (
      0 => '.\\templates\\usuarios.tpl',
      1 => 1416858902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28523544a6202afe6f8-93718783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a6202b5eb46_22123750',
  'variables' => 
  array (
    'lista' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a6202b5eb46_22123750')) {function content_544a6202b5eb46_22123750($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Administracion de Usuarios </h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> # </th>
						<th> Nombre </th>
						<th> Email </th>
						<th> Password </th>
						<th> Administrador </th>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
					<tbody>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['mail'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['pass'];?>
 </p> </td>
						<td> <p class="eventos"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['admin'];?>
 </p> </td>
						<td> <button type=button data-toggle="modal" data-target="#Modal2"> <a href="#Modal2"> Editar </a> </button> </td>
						<td> <input type="button" value="Eliminar" onClick="location.href = 'index.php?action=eliminarusuario&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
'"> </td>
					</tbody>
					<?php }
if (!$_smarty_tpl->tpl_vars['usuario']->_loop) {
?>
							<tbody>
								<td> <p class="eventos"> Aun no se ha registrado ningun usuario </p> </td>
							</tbody>
					<?php } ?>
				</table>
				<button class="btn btn-default" data-toggle="modal" data-target="#Modal"> <a href="#Modal">Modificar</a> </button>
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
									<input type="hidden" name="action" value="agregarusuario"/>
									<div>
										<input type="text" id='nombre' name='nombre' class="form-control" placeholder="Nombre">
									</div> <br>
									<div>
										<input type="text" id='mail' name='mail' class="form-control" placeholder="E-mail">
									</div> <br>
									<div>
										<input type="text" id='pass' name='pass' class="form-control" placeholder="password">
									</div> <br>
									<div>
										<input type="text" id='admin' name='admin'  class="form-control" placeholder="0->NO ; 1->SI">
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
											<input type="hidden" name="action" value="editarusuario"/>
											<div>
												<input type="text" id='id' name='id' class="form-control" placeholder="id">
											</div> <br>
											<div>
												<input type="text" id='nombre' name='nombre' class="form-control" placeholder="Nombre">
											</div> <br>
											<div>
												<input type="text" id='mail' name='mail' class="form-control" placeholder="E-mail">
											</div> <br>
											<div>
												<input type="text" id='pass' name='pass' class="form-control" placeholder="password">
											</div> <br>
											<div>
												<input type="text" id='admin' name='admin'  class="form-control" placeholder="0->NO ; 1->SI">
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
