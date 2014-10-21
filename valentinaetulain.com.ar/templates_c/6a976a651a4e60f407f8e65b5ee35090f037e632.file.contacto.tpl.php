<?php /* Smarty version Smarty-3.1.19, created on 2014-10-19 06:28:24
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3258754417478d521f2-67133168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a976a651a4e60f407f8e65b5ee35090f037e632' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1413692888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3258754417478d521f2-67133168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54417478dc1bc7_76168229',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54417478dc1bc7_76168229')) {function content_54417478dc1bc7_76168229($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
															
			<form id="formualario" method="post" onSubmit="return validacion();" >
				<div id="contenidoform">
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
				</div>
			</form>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
