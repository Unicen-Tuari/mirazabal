<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 23:00:54
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167755473a4feb54105-52942257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edcac15e32b930159c0cfe2e193b1e86e8f6a85a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1416866450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167755473a4feb54105-52942257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473a4feb7ac85_06596916',
  'variables' => 
  array (
    'log' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473a4feb7ac85_06596916')) {function content_5473a4feb7ac85_06596916($_smarty_tpl) {?><!DOCTYPE html>

	<html>
		
		<head>
			<!--
			<link href='http://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Vesper+Libre' rel='stylesheet' type='text/css'>
			-->
			<title>Valentina Etulain</title>
			<link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
			<link href="bootstrap-3.2.0-dist/css/bootstrap-responsive.min.css" rel="stylesheet">
			<link href="css/estilo.css" rel="stylesheet" type="text/css">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<script language="javascript" type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
			
		</head>

		
		<body id="pageBody" style="zoom: 1;">
			<div id="divBoxed" class="container">
				<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
					<div class="divPanel notop nobottom">
						<div class="row-fluid">
							<div class="span12">
								<div id="divLogo" class="pull-left">
									<a href="index.php" id="divSiteTitle">Valentina Etulain</a><br>
									<a href="index.php" id="divTagLine">Fotografia</a>
								</div>
								
								<div id="divMenuRight" class="pull-right">
								<?php if (($_smarty_tpl->tpl_vars['log']->value)) {?>
									<nav class="navbar navbar-inverse" role="navigation">
										<div class="collapse navbar-collapse navbar-ex1-collapse">
											<ul class="nav navbar-nav">
											  <li><a href="index.php">Home</a></li>
											</ul>
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=biografia">Biografia</a></li>
											</ul>
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=eventos">Eventos</a></li>
											</ul>
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=galeria">Galeria</a></li>
											</ul> 
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=contacto">Contacto</a></li>
											</ul>
											<ul class="nav navbar-nav navbar-right">
											  	<a href="#" data-toggle="dropdown"> <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 </a>
												<ul class="dropdown-menu">
													<li><a href="index.php?action=carrito"> Mi carrito </a> </li>
													<li><a href="index.php?action=logout"> Salir </a> </li>
												</ul>
											</ul>
											
										</div>
									</nav>	
									<?php } else { ?>
									<nav class="navbar navbar-inverse" role="navigation">
										<div class="collapse navbar-collapse navbar-ex1-collapse">
											<ul class="nav navbar-nav">
											  <li><a href="index.php">Home</a></li>
											</ul>
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=biografia">Biografia</a></li>
											</ul>
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=eventos">Eventos</a></li>
											</ul>
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=galeria">Galeria</a></li>
											</ul> 
											<ul class="nav navbar-nav">
											  <li><a href="index.php?action=contacto">Contacto</a></li>
											</ul>
											<ul class="nav navbar-nav navbar-right">
											  	<a href="#" data-toggle="dropdown"> Sesion	</a>
												<ul class="dropdown-menu">
													<li><a href="index.php?action=login"> Login </a> </li>
												</ul>
											</ul>
											
										</div>
									</nav>
								<?php }?>
									
								
				
								</div>
							</div>
						</div><?php }} ?>
