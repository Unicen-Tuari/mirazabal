<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 22:38:40
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202505473a56015ae78-19492646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '642179a6a1a4ab9d21bc445aa5a2162be4f7182d' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1416073759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202505473a56015ae78-19492646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473a5601bec00_45841452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473a5601bec00_45841452')) {function content_5473a5601bec00_45841452($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Login </h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Gracias por su visita! </h4>
				</div>
				<div id="contenidoform">										
					<form id="formualario" action="index.php" method="POST">	
					<input type="hidden" name="action" value="ingresar"/>
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
