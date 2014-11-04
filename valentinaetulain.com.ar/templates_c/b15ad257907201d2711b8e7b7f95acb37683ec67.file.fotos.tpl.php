<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 16:22:29
         compiled from ".\templates\fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9704542aedccdc6b64-63133178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b15ad257907201d2711b8e7b7f95acb37683ec67' => 
    array (
      0 => '.\\templates\\fotos.tpl',
      1 => 1414074146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9704542aedccdc6b64-63133178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542aedcce596f7_78308387',
  'variables' => 
  array (
    'galeria' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542aedcce596f7_78308387')) {function content_542aedcce596f7_78308387($_smarty_tpl) {?><div class="row">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
		<div class="col-sx-4 col-md-3">	
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['archivo'];?>
" class="img-responsive" alt ="imagen db" />
			<div class="caption">
				<h6>"<?php echo $_smarty_tpl->tpl_vars['img']->value['titulo'];?>
"</h6>
				<p>"<?php echo $_smarty_tpl->tpl_vars['img']->value['descripcion'];?>
"</p> 
				<button class="btn btn-default" data-toggle="modal" data-target="#myModal"> <a href="index.php?action=carrito"> Comprar </a> </button>
			</div> <br>
		</div>
	<?php } ?>
</div><?php }} ?>
