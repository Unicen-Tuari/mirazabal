<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 22:38:37
         compiled from ".\templates\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147895473a55dc9ae23-63556685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa358a315e4bbf3d0730f098d5e3e61058d73bd4' => 
    array (
      0 => '.\\templates\\registro.tpl',
      1 => 1415100494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147895473a55dc9ae23-63556685',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473a55dcfdb34_27216132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473a55dcfdb34_27216132')) {function content_5473a55dcfdb34_27216132($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
					<h1> Registrate! </h1>
				<div> 
				<h4> Complete el siguiente formulario: </h4>
			</div>
															
			<form action="index.php" method="POST" onSubmit="return  validacion();" >
				<input type="hidden" name="action" value="guardarRegistro"/>											
				<div class="contenedor_formulario">
					<label for="name">Nombre:</label>
					<br>
					<input type="text" name="nombre" id="nombre">
				</div>
														
				<div class="contenedor_formulario">
					<label for="email">Email:</label>
					<br>
					<input type="text" name="email" id="email">
				</div> 
				<div class="contenedor_formulario">
					<label for="password">Password:</label>
					<br>
					<input type="password" name="pass">
				</div><br>
				<button id="cargar"> Enviar </button>
			</form>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
