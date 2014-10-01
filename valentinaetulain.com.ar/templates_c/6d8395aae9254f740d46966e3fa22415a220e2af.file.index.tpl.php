<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 23:05:40
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7504542aeb9ce7f0c4-41512544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d8395aae9254f740d46966e3fa22415a220e2af' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1412111048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7504542aeb9ce7f0c4-41512544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542aeb9d1c2633_51594755',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542aeb9d1c2633_51594755')) {function content_542aeb9d1c2633_51594755($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<div class="container-fluid">
		<div class="row-fluid">
			<div id="headerSeparator">	</div>
			<div class="camera_full_width">
				<div id="camera_wrap" class="camera_wrap">
					<div class="camera_fakehover">
						<div class="col-xs-6">
							<img name="miImagen" class="img-responsive">
						</div>
					</div>
				</div>
				<br style="clear:both"><div style="margin-bottom:40px"></div>
			</div> 
		</div>
	
	
		<i class="fa fa-facebook-square-fa-2x"> </i>
		<i class="fa fa-twitter-square-fa-2x"> </i>
		<i class="fa fa-youtube-fa-2x"> </i>
		<i class="fa fa-instagram-fa-2x"> </i>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
