<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 22:37:02
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281025473a4feab1ab9-57791850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d8395aae9254f740d46966e3fa22415a220e2af' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1413899228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281025473a4feab1ab9-57791850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473a4feb30049_24865090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473a4feb30049_24865090')) {function content_5473a4feb30049_24865090($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="contenedor">
				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>
					
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item"> <img class="imgindex" src="imagenes/home1.jpg" alt="banner1" /></div>
						<div class="item"> <img class="imgindex"  src="imagenes/home2.jpg" alt="banner2" /> </div>
						<div class="item"> <img class="imgindex" src="imagenes/home3.jpg" alt="banner3" /> </div>
						<div class="item"> <img class="imgindex" src="imagenes/home4.jpg" alt="banner4" /> </div>
						<div class="item"> <img class="imgindex" src="imagenes/home5.jpg" alt="banner5" /> </div>
					</div>
					
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="redes"
		<a href="https://www.facebook.com/ValentinaEtulain?fref=ts"> <img src="imagenes/bt_facebook.jpg"> </a>
		<a href="https://twitter.com/ValentinaEtu"> <img src="imagenes/bt_twitter.jpg"> </a>
		<a href="http://www.iphoneogram.com/u/44783776"> <img src="imagenes/bt_instagram.jpg"> </a>
		<a href="http://www.youtube.com/user/valentinaetu"> <img src="imagenes/bt_youtube.jpg"> </a>
		<a href="https://plus.google.com/110353763409724192775/posts"> <img src="imagenes/bt_g+.jpg"> </a>
	<div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

<?php }} ?>
