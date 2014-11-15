<?php /* Smarty version Smarty-3.1.19, created on 2014-11-12 13:31:22
         compiled from ".\templates\loginerror.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119095463531ad01416-63318317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '223f98954cb291285536c484d1e33b69b5df7a11' => 
    array (
      0 => '.\\templates\\loginerror.tpl',
      1 => 1415795297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119095463531ad01416-63318317',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5463531ae1b738_17611459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5463531ae1b738_17611459')) {function content_5463531ae1b738_17611459($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Login </h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Usuario o contraseña INCORRECTA! Intente de nuevo </h4>
				</div>
				<div id="contenidoform">										
					<form id="formualario" action="index.php" method="POST">	
						<input type="hidden" name="action" value="ingresar"/>
						<div class="contenedor_formulario">
							<label for="email">Email:</label>
							<br>
							<input type="text" name="email" id="email"> 
						</div>
			
						<div class="contenedor_formulario">
							<label for="message">Password:</label>
							<br>
							<input type="password" id="pass" name="pass">
						</div>
						<a class="vacia" href="index.php?action=registro"> 
							<p class="bio"> Aun no tengo cuenta <a href="index.php?action=registo"> </a> </p>
						</a>
						<button id="cargar" type="Submit"> Enviar </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
