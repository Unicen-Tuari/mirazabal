{include file="header.tpl"}
<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Administracion de Usuarios </h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> # </th>
						<th> Nombre </th>
						<th> Email </th>
						<th> Password </th>
						<th> Administrador </th>
					</thead>
					{foreach $lista as $usuario}
					<tbody>
						<td> <p class="eventos"> {$usuario.id} </p> </td>
						<td> <p class="eventos"> {$usuario.nombre} </p> </td>
						<td> <p class="eventos"> {$usuario.mail} </p> </td>
						<td> <p class="eventos"> {$usuario.pass} </p> </td>
						<td> <p class="eventos"> {$usuario.admin} </p> </td>
						<td> <button type=button data-toggle="modal" data-target="#Modal2"> <a href="#Modal2"> Editar </a> </button> </td>
						<td> <input type="button" value="Eliminar" onClick="location.href = 'index.php?action=eliminarusuario&id={$usuario.id}'"> </td>
					</tbody>
					{foreachelse}
							<tbody>
								<td> <p class="eventos"> Aun no se ha registrado ningun usuario </p> </td>
							</tbody>
					{/foreach}
				</table>
				<button class="btn btn-default" data-toggle="modal" data-target="#Modal"> <a href="#Modal">Modificar</a> </button>
				<!-- Modal -->
				<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title"> Complete siguientes campos:</h4>
							</div>
							<div class="modal-body">
								<form method="POST">
									<input type="hidden" name="action" value="agregarusuario"/>
									<div>
										<input type="text" id='nombre' name='nombre' class="form-control" placeholder="Nombre">
									</div> <br>
									<div>
										<input type="text" id='mail' name='mail' class="form-control" placeholder="E-mail">
									</div> <br>
									<div>
										<input type="text" id='pass' name='pass' class="form-control" placeholder="password">
									</div> <br>
									<div>
										<input type="text" id='admin' name='admin'  class="form-control" placeholder="0->NO ; 1->SI">
									</div> <br>
									
									<input value = "Agregar" class="btn btn-success" type = "submit" >
								
								</div>
								</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- Modal -->
						<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title"> Complete siguientes campos:</h4>
									</div>
									<div class="modal-body">
										<form method="POST">
											<input type="hidden" name="action" value="editarusuario"/>
											<div>
												<input type="text" id='id' name='id' class="form-control" placeholder="id">
											</div> <br>
											<div>
												<input type="text" id='nombre' name='nombre' class="form-control" placeholder="Nombre">
											</div> <br>
											<div>
												<input type="text" id='mail' name='mail' class="form-control" placeholder="E-mail">
											</div> <br>
											<div>
												<input type="text" id='pass' name='pass' class="form-control" placeholder="password">
											</div> <br>
											<div>
												<input type="text" id='admin' name='admin'  class="form-control" placeholder="0->NO ; 1->SI">
											</div> <br>

											<input value = "Editar" class="btn btn-success" type = "submit" >
										
										</div>
								</form>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}