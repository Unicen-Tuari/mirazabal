<?php /* Smarty version Smarty-3.1.19, created on 2014-10-16 21:29:46
         compiled from ".\templates\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24757543dc11b2f94b3-08793161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28de0958bdb378ae2ecd2a8ec4adf68b4f3777bd' => 
    array (
      0 => '.\\templates\\prueba.tpl',
      1 => 1413487661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24757543dc11b2f94b3-08793161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543dc11b346a22_64741960',
  'variables' => 
  array (
    'archivo' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543dc11b346a22_64741960')) {function content_543dc11b346a22_64741960($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archivo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
	<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['archivo'];?>
" class="img-responsive" alt ="imagen db" />
<?php } ?><?php }} ?>
