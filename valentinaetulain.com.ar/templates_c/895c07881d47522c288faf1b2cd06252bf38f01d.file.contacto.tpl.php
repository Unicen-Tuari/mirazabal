<?php /* Smarty version Smarty-3.1.19, created on 2014-08-26 00:53:12
         compiled from "template\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150653fbbe584c8b23-06486686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '895c07881d47522c288faf1b2cd06252bf38f01d' => 
    array (
      0 => 'template\\contacto.tpl',
      1 => 1409007115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150653fbbe584c8b23-06486686',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fbbe585325f8_36983747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbbe585325f8_36983747')) {function content_53fbbe585325f8_36983747($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
				
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
<?php echo $_smarty_tpl->getSubTemplate ("template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</section><?php }} ?>
