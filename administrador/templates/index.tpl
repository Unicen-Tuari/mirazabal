<link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
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

</section>