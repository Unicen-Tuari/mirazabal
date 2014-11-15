<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 17:01:15
         compiled from ".\templates\usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28523544a6202afe6f8-93718783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddf77b4cf6a8ca94707f4eab3c9de225dc529424' => 
    array (
      0 => '.\\templates\\usuarios.tpl',
      1 => 1414162845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28523544a6202afe6f8-93718783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a6202b5eb46_22123750',
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
						<th> Apellido </th>
						<th> Email </th>
						<th> Password </th>
					</thead>
					<tbody>
						<td> 1 </td>
						<td> Matias </td>
						<td> Irazabal </td>
						<td> mirazabal1@gmail.com </td>
						<td> 1234567890 </td>
					</tbody>
				</table>

				<div>
					<input type="text" id='id' class="form-control" placeholder="Id">
				</div> <br>
				<div>
					<input type="text" id='nombre' class="form-control" placeholder="Nombre">
				</div> <br>
				<div>
					<input type="text" id='apellido' class="form-control" placeholder="Apellido">
				</div> <br>
				<div>
					<input type="text" id='email' class="form-control" placeholder="E-mail">
				</div> <br>
				<div>
					<input type="text" id='pass' class="form-control" placeholder="password">
				</div> <br>
				
				<button type="button" id="agregar" class="btn btn-success"> Agregar </button>
								
				<button type="button" id="modificar" class="btn btn-primary"> Modificar </button>
							
				<button type="button" id="eliminar" class="btn btn-danger"> Eliminar </button>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
