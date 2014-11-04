<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 18:11:43
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178045449261296b6e7-06333628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '642179a6a1a4ab9d21bc445aa5a2162be4f7182d' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1414080700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178045449261296b6e7-06333628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54492612a44399_73701261',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54492612a44399_73701261')) {function content_54492612a44399_73701261($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Contacto </h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Gracias por su visita! </h4>
				</div>
				<div id="contenidoform">										
					<form id="formualario">					
						<div class="contenedor_formulario">
							<label for="email">Email:</label>
							<br>
							<input type="text" name="email" id="email"> 
						</div>
			
						<div class="contenedor_formulario">
							<label for="message">Password:</label>
							<br>
							<input type="password">
						</div>
						<a class="vacia" href="index.php?action=registro"> 
							<p class="bio"> Aun no tengo cuenta <a href="index.php?action=registo"> </a> </p>
						</a>
						<button id="cargar"> Enviar </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
