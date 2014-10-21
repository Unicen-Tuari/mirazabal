<?php /* Smarty version Smarty-3.1.19, created on 2014-10-21 20:57:48
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24710542aedaa0b0036-99766818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5bae9bd497495866c20ec8e9ce498f373e20748' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1413917851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24710542aedaa0b0036-99766818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542aedaa1118d2_63881049',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542aedaa1118d2_63881049')) {function content_542aedaa1118d2_63881049($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
					<form id="formualario" method="post" onSubmit="return validacion();" >
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
							<input type="text" class="requerido" name="message" id="message">
						</div>
						<br>
						<button id="cargar"> Enviar </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
