<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:47:47
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:794544a4f6a63d869-51652230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba385725a4918abbeb9d92de6824e198457dcae9' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1416073588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '794544a4f6a63d869-51652230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a4f6a6eaae0_91742786',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a4f6a6eaae0_91742786')) {function content_544a4f6a6eaae0_91742786($_smarty_tpl) {?><link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<section>

	<div class="panel panel-success">
		
		 <div class="panel-heading">
			<h3 class="panel-title"> Bienvenido! </h3>
		</div>
  
		<div class="panel-body">
			
			<form class="form-horizontal" role="form" method="POST">
				<input type="hidden" name="action" value="ingresar"/>
				<div class="form-group">
					<label for="ejemplo_email_3" class="col-lg-2 control-label">Email</label>
					<div class="col-lg-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
  
				<div class="form-group">
					<label for="ejemplo_password_3" class="col-lg-2 control-label">Password</label>
					<div class="col-lg-10">
						<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
					</div>
				</div>
  
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-default">Entrar</button>
					</div>
				</div>
			</form>
		
		</div>
		
	</div>

</section><?php }} ?>
