<?php /* Smarty version Smarty-3.1.19, created on 2014-10-19 05:12:26
         compiled from ".\templates\eventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619954432c1a6c7799-06862247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc0cc9e69ae71928b088b6efe3a3ca135661339' => 
    array (
      0 => '.\\templates\\eventos.tpl',
      1 => 1412786801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619954432c1a6c7799-06862247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'eventos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54432c1a789d08_98035553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54432c1a789d08_98035553')) {function content_54432c1a789d08_98035553($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="eventos">
	<div class="container">
		<div class="row-fluid">
			<div id="headerSeparator">	</div>
			<div class="camera_full_width">
				<div id="camera_wrap" class="camera_wrap">
					<div class="camera_fakehover">
						<h1> Proximos Eventos..!! </h1>
						<div class="eventos">
							<div class="col-xs-10"
								<?php  $_smarty_tpl->tpl_vars['eventos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eventos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eventos']->key => $_smarty_tpl->tpl_vars['eventos']->value) {
$_smarty_tpl->tpl_vars['eventos']->_loop = true;
?>
									<a href="index.php?action=detalleEvento&id=<?php echo $_smarty_tpl->tpl_vars['eventos']->value['id'];?>
"> 
										<p> <?php echo $_smarty_tpl->tpl_vars['eventos']->value['descripcion'];?>
 </p> 
									</a>
								<?php }
if (!$_smarty_tpl->tpl_vars['eventos']->_loop) {
?>
									No hay eventos
								<?php } ?>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</div>			
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
