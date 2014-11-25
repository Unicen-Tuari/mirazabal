<?php /* Smarty version Smarty-3.1.19, created on 2014-11-20 22:17:07
         compiled from ".\templates\loginerror.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30732546792bce2db33-31208317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89fe67fa495d1449205614d927a72f567141bc89' => 
    array (
      0 => '.\\templates\\loginerror.tpl',
      1 => 1416075325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30732546792bce2db33-31208317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546792bce7d2b2_90106568',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546792bce7d2b2_90106568')) {function content_546792bce7d2b2_90106568($_smarty_tpl) {?><link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<section>

	<div class="panel panel-success">
		
		 <div class="panel-heading">
			<h3 class="panel-title"> Usuario o contrase&ntildea invalida </h3>
		</div>
  
		<div class="panel-body">
			
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="ejemplo_email_3" class="col-lg-2 control-label">Email</label>
					<div class="col-lg-10">
						<input type="email" class="form-control" id="ejemplo_email_3" placeholder="Email">
					</div>
				</div>
  
				<div class="form-group">
					<label for="ejemplo_password_3" class="col-lg-2 control-label">Password</label>
					<div class="col-lg-10">
						<input type="password" class="form-control" id="ejemplo_password_3" placeholder="Password">
					</div>
				</div>
  
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-default" onclick="location.href='index.php?action=ingresar'">Entrar</button>
					</div>
				</div>
			</form>
		
		</div>
		
	</div>

</section><?php }} ?>
