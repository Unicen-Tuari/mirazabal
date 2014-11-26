<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 13:09:19
         compiled from ".\templates\compraExito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1365475c2c71657d0-08077327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf9bef3a97c8e4e7f1e8883f6c7028bffbbf6d35' => 
    array (
      0 => '.\\templates\\compraExito.tpl',
      1 => 1417003744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1365475c2c71657d0-08077327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5475c2c723dd82_25740266',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475c2c723dd82_25740266')) {function content_5475c2c723dd82_25740266($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Compras realizada exitosamente	</h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Gracias por su compra! </h4>
				</div>
				<div id="contenidoform">										
					<img src="imagenes/pulgar.jpg">
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
