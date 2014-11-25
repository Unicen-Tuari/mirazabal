{include file="header.tpl"}
<section>
<br><br><br><br><br><br><br><br>
<div class="panel panel-default">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"> Eventos Programados</h3>
		</div>
			<div class="panel-body">
				<table class="table table-striped">
				<thead>
					<th> Id </th>
					<th> Administrador </th>
					<th> Pais </th>
					<th> Loacalidad </th>
					<th> Hora </th>
					<th> Descipcion </th>
					
				</thead>
				{foreach $lista as $comentarios}
					<tbody>
						<td> <p class="eventos"> {$comentarios.id} </p> </td>
						<td> <p class="eventos"> {$comentarios.administrador} </p> </td>
						<td> <p class="eventos"> {$comentarios.pais} </p> </td>
						<td> <p class="eventos"> {$comentarios.localidad} </p> </td>
						<td> <p class="eventos"> {$comentarios.hora} </p> </td>
						<td> <p class="eventos"> {$comentarios.descripcion} </p> </td>
						<td> <button type=button data-toggle="modal" data-target="#Modal2"> <a href="#Modal2"> Editar </a> </button> </td>
						<td> <input type="button" value="Eliminar" onClick="location.href = 'index.php?action=eliminarevento&id={$comentarios.id}'"> </td>
					</tbody>
				{foreachelse}
						<tbody>
							<td> <p class="eventos"> No hay Comentarios </p> </td>
						</tbody>
				{/foreach}
			</table>			
				<button class="btn btn-default" data-toggle="modal" data-target="#Modal"> <a href="#Modal"> Agregar </a> </button>
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
									<input type="hidden" name="action" value="agregarevento"/>
									<div class="row">
										<div>
											<input type="text" name='administrador' id='administrador' class="form-control" placeholder="Administrador"> <br>
										</div> 
											
										<div>
											<input type="text" name='pais' id='pais' class="form-control" placeholder="Pais"> <br>
										</div> 
										
										<div>
											<input type="text" name='localidad' id='localidad' class="form-control" placeholder="Localidad">
										</div> <br>
										
										<div>
											<input type="text" name='fecha' id='fecha' class="form-control" placeholder="aaaa-mm-dd">
										</div> <br>
										
										<div>
											<input type="text" name='hora' id='hora'  class="form-control" placeholder="hora">
										</div> <br>
										
										<div>
											<input type="text" name='descripcion' id='descripcion' class="form-control" placeholder="Descripcion">
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
											<input type="hidden" name="action" value="editarevento"/>
											<div class="row">
												<div>
													<input type="text" name='id' id='id' class="form-control" placeholder="id"> <br>
												</div> 
											
												<div>
													<input type="text" name='administrador' id='administrador' class="form-control" placeholder="Administrador"> <br>
												</div> 
													
												<div>
													<input type="text" name='pais' id='pais' class="form-control" placeholder="Pais"> <br>
												</div> 
												
												<div>
													<input type="text" name='localidad' id='localidad' class="form-control" placeholder="Localidad">
												</div> <br>
												
												<div>
													<input type="text" name='fecha' id='fecha' class="form-control" placeholder="aaaa-mm-dd">
												</div> <br>
												
												<div>
													<input type="text" name='hora' id='hora'  class="form-control" placeholder="hora">
												</div> <br>
												
												<div>
													<input type="text" name='descripcion' id='descripcion' class="form-control" placeholder="Descripcion">
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
	</div>
</section>
{include file="footer.tpl"}