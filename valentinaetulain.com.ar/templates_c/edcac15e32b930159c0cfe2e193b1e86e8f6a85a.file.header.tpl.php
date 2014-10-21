<?php /* Smarty version Smarty-3.1.19, created on 2014-10-21 20:35:07
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2889542aeb9d2f8bc7-89994727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edcac15e32b930159c0cfe2e193b1e86e8f6a85a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1413916494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2889542aeb9d2f8bc7-89994727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542aeb9d2fd0b2_27493345',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542aeb9d2fd0b2_27493345')) {function content_542aeb9d2fd0b2_27493345($_smarty_tpl) {?><!DOCTYPE html>

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
			<link href="css/font-awesome.css" rel="stylesheet">			
			<link href="css/estilo.css" rel="stylesheet" type="text/css">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>Tutorial IguannaWeb</title>
				<script language="javascript" type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
				<script>
				$(document).ready(function(){
					$('#cargar').click(function(){
						$.ajax({
							url: "index.php?action=fotos",
							success:function(data){
								$('#contenido').html(data);
								}
						})
					});
				});
				</script>
				
				<script>
					$(document).ready(function(){
						$('#cargar').click(function(){
							$.ajax({
								url: "index.php?action=contactoExito",
								success:function(data){
									$('#contenidoform').html(data);
								}
							})
						});
					});
				</script>
			
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
													<li><a href="index.php?action=registro"> Registro </a> </li>
													<li><a href="index.php?action=carrito"> Mi carrito </a> </li>
												</ul>
											</ul>
											
										</div>
									</nav>	
				
								</div>
							</div>
						</div><?php }} ?>
