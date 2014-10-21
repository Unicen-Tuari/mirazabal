<?php /* Smarty version Smarty-3.1.19, created on 2014-10-19 05:32:39
         compiled from ".\templates\fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19658544175ebbc9004-13817391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42137204a02ade3d79ab34c6345ad2be6b40dc3b' => 
    array (
      0 => '.\\templates\\fotos.tpl',
      1 => 1413689552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19658544175ebbc9004-13817391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544175ebc5f726_30194793',
  'variables' => 
  array (
    'galeria' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544175ebc5f726_30194793')) {function content_544175ebc5f726_30194793($_smarty_tpl) {?><div class="row">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
		<div class="col-sx-4 col-md-3">	
			<a href="visor.php?id=<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
" >
				<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['archivo'];?>
" class="img-responsive" alt ="imagen db" />
			</a>
			<div class="caption">
				<h6>"<?php echo $_smarty_tpl->tpl_vars['img']->value['titulo'];?>
"</h6>
				<p>"<?php echo $_smarty_tpl->tpl_vars['img']->value['descripcion'];?>
"</p> 
				<button class="btn btn-default" data-toggle="modal" data-target="#myModal"> <a href="index.php?action=carrito" class="btn btn-primary" role="button">Comprar</a>
				<button class="btn btn-default" data-toggle="modal" data-target="#myModal" Onclick="verfoto(<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
)"> Ampliar </button>
			</div><br>
		</div>
	<?php } ?>
</div><?php }} ?>
