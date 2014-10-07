<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 12:08:53
         compiled from ".\templates\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15735433b9fb79fd98-76128558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa358a315e4bbf3d0730f098d5e3e61058d73bd4' => 
    array (
      0 => '.\\templates\\registro.tpl',
      1 => 1412676367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15735433b9fb79fd98-76128558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5433b9fb806592_50098948',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433b9fb806592_50098948')) {function content_5433b9fb806592_50098948($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
	<div class="row-fluid">
		<div id="headerSeparator">	</div>
		<div class="camera_full_width">
			<div id="camera_wrap" class="camera_wrap">
				<div class="camera_fakehover">
					<h1> Registrate! </h1>
				<div> 
				<h4> Complete el siguiente formulario: </h4>
			</div>
															
			<form onSubmit="return  validacion();" >
															
				<div class="contenedor_formulario">
					<label for="name">Nombre:</label>
					<br>
					<input type="text" name="nombre" id="nombre">
				</div>
				
				<div class="contenedor_formulario">
					<label for="name">Apellido:</label>
					<br>
					<input type="text" name="apellido" id="apellido">
				</div>
														
				<div class="contenedor_formulario">
					<label for="email">Email:</label>
					<br>
					<input type="text" name="email" id="email">
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
