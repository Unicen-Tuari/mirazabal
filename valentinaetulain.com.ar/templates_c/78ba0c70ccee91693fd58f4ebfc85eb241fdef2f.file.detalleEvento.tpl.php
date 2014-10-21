<?php /* Smarty version Smarty-3.1.19, created on 2014-10-19 05:12:29
         compiled from ".\templates\detalleEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1680454432c1d1cafa9-65587332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ba0c70ccee91693fd58f4ebfc85eb241fdef2f' => 
    array (
      0 => '.\\templates\\detalleEvento.tpl',
      1 => 1412858939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1680454432c1d1cafa9-65587332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eventos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54432c1d3c9637_82902119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54432c1d3c9637_82902119')) {function content_54432c1d3c9637_82902119($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
								</a>
									<p> <?php echo $_smarty_tpl->tpl_vars['eventos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['pais'];?>
 " - " <?php echo $_smarty_tpl->tpl_vars['eventos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['localidad'];?>
 " - " <?php echo $_smarty_tpl->tpl_vars['eventos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['fecha'];?>
 " - " <?php echo $_smarty_tpl->tpl_vars['eventos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['hora'];?>
 " - "  "hs" " - " <?php echo $_smarty_tpl->tpl_vars['eventos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['descripcion'];?>
 </p> 
								</a>
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
