<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 22:59:38
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112965473aa4a6736e5-98630065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5bae9bd497495866c20ec8e9ce498f373e20748' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1416667608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112965473aa4a6736e5-98630065',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473aa4a6d9e02_98851827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473aa4a6d9e02_98851827')) {function content_5473aa4a6d9e02_98851827($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Contacto </h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Gracias por dejar tu comentario! </h4>
				</div>
				<div id="contenidoform">										
					<form id="formualario" method="post" enctype="multipart/form-data">
						<input type="hidden" name="action" value="mail"/>
						<div class="contenedor_formulario">
							<label for="name">Nombre:</label>
							<br>
							<input type="text" class="requerido" id="nombre" name="nombre">
						</div>
																
						<div class="contenedor_formulario">
							<label for="email">Email:</label>
							<br>
							<input type="text" name="email" id="email"> 
						</div>
			
						<div class="contenedor_formulario">
							<label for="message">Mensaje:</label>
							<br>
							<textarea rows="4" cols="50" class="requerido" name="message" id="message">
							</textarea>
						</div>
						<br>
						<button id="cargar"> Enviar </button>
						<input type="hidden" name="phpmailer">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
