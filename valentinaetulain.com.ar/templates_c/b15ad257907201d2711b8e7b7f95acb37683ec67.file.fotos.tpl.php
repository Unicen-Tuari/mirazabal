<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 13:29:47
         compiled from ".\templates\fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148095473aa521854e3-20044376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b15ad257907201d2711b8e7b7f95acb37683ec67' => 
    array (
      0 => '.\\templates\\fotos.tpl',
      1 => 1416918582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148095473aa521854e3-20044376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473aa52219ad3_12211031',
  'variables' => 
  array (
    'galeria' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473aa52219ad3_12211031')) {function content_5473aa52219ad3_12211031($_smarty_tpl) {?><div class="row">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
		<div class="col-sx-4 col-md-3">	
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['archivo'];?>
" class="img-responsive" alt ="imagen db" />
			<div class="caption">
				<h6>"<?php echo $_smarty_tpl->tpl_vars['img']->value['titulo'];?>
"<h6>
 				<p>"<?php echo $_smarty_tpl->tpl_vars['img']->value['descripcion'];?>
"</p>
				<p>Costo: $<?php echo $_smarty_tpl->tpl_vars['img']->value['costo'];?>
 </p>
				<button class="btn btn-default" data-toggle="modal" onclick="clickcomprar(<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
)"> Comprar</a> </button>
					<!-- Modal -->
					<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"> Complete los campos para realizar la compra</h4>
								</div>
								<div class="modal-body">
									<form action="index.php?action=cargarcarrito" method="POST">
										<label for="ejemplo_email_1">E-mail</label> <br>
										<input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su email"> <br>
														
										<label for="ejemplo_email_1">Codigo de imagen</label> <br>
										<input type="text" class="form-control" id="idfoto" name="idfoto" placeholder="Ingrese codigo de imagen"> <br>
										
										<label for="ejemplo_email_1">Cantidad</label> <br>
										<input type="text" class="form-control" id="cant" name="cant" placeholder="Ingrese la cantidad"> <br>
								  
										<label for="ejemplo_password_1"> Nº Tarjeta de credito </label> <br>
										<input type="password" class="form-control" id="tarjeta" name="tarjeta" placeholder="Nº Tarjeta de credito"> <br>

										<input type="submit" name="carrito" /> 
									</form>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div> <br>
			</div>
		<?php } ?>
	</div>
</div><?php }} ?>
