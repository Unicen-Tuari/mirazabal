<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 20:05:53
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24710542aedaa0b0036-99766818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5bae9bd497495866c20ec8e9ce498f373e20748' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1412100351,
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
	<div class="row-fluid">
		<div id="headerSeparator">	</div>
		<div class="camera_full_width">
			<div id="camera_wrap" class="camera_wrap">
				<div class="camera_fakehover">
					<h1> Contacto </h1>
				<div> 
				<h4> Gracias por dejar tu comentario! </h4>
			</div>
															
			<form action="contactoExito.html" onSubmit="return  validacion();" > <!-- action="php\execute.php" method="POST" -->
															
				<div class="contenedor_formulario">
					<label for="name">Nombre:</label>
					<br>
					<input type="text" name="name" id="nombre">
				</div>
														
				<div class="contenedor_formulario">
					<label for="email">Email:</label>
					<br>
					<input type="text" name="email" id="email">
				</div>

				<div class="contenedor_formulario">
					<label for="message">Mensaje:</label>
					<br>
					<textarea name="message" id="message"></textarea>
					<br>
				</div>

				<div class="boton_enviar">
					<input type="submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
