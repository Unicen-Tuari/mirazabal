<?php /* Smarty version Smarty-3.1.19, created on 2014-10-19 04:41:54
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9547544324f2395cd7-97868775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c1f72c58235e400cfbbaaa97faf07e034d1ed8c' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1412673604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9547544324f2395cd7-97868775',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544324f2558bd9_83984926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544324f2558bd9_83984926')) {function content_544324f2558bd9_83984926($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
	</div>

			<a href="www.facebook.com"> <img src="imagenes/bt_facebook.jpg"> </a>
			<a href="www.twitter.com"> <img src="imagenes/bt_twitter.jpg"> </a>
			<a href="www.instagram.com"> <img src="imagenes/bt_instagram.jpg"> </a>
			<a href="www.youtube.com"> <img src="imagenes/bt_youtube.jpg"> </a>
			<a href="www.google.com"> <img src="imagenes/bt_g+.jpg"> </a>

</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
