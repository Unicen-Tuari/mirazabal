{include file="header.tpl"}
<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Fotos colgadas en la web </h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> Id </th>
						<th> Categoria </th>
						<th> Titulo </th>
						<th> Descripcion </th>
						<th> Foto </th>
					</thead>
					{foreach $lista as $fotos}
						<tbody>
							<td> <p class="eventos"> {$fotos.id} </p> </td>
							<td> <p class="eventos"> {$fotos.categoria} </p> </td>
							<td> <p class="eventos"> {$fotos.titulo} </p> </td>
							<td> <p class="eventos"> {$fotos.descripcion} </p> </td> 
							<td> <p> <img src="{$fotos.archivo}" alt ="imagen db" /> </td>
							<td> <button type=button data-toggle="modal" data-target="#Modal2"> <a href="#Modal2"> Editar </a> </button> </td>
							<td> <input type="button" value="Eliminar" onClick="location.href = 'index.php?action=eliminarfoto&id={$fotos.id}'"> </td>
						</tbody>
					{foreachelse}
							<tbody>
								<td> <p class="eventos"> No hay fotos </p> </td>
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
									<input type="hidden" name="action" value="agregarfoto"/>
									<div class="row">						
										<div>
											<input type="text" id='titulo' name='titulo' class="form-control" placeholder="titulo"> <br>
										</div> 
										
										<div>
											<input type="text" id='categoria' name='categoria' class="form-control" placeholder="categoria"> <br>
										</div> 
																				
										<div>
											<input type="text" id='descripcion' name='descripcion' class="form-control" placeholder="descripcion">
										</div> <br>
										
										<div>
											<input type="text" id='costo' name='costo' class="form-control" placeholder="costo">
										</div> <br>
										
										<div>
											<input type=file id='archivo' name='archivo' class="form-control"> <br><br>
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
											<input type="hidden" name="action" value="editarfoto"/>
											<div class="row">						
												<div>
													<input type="text" id='id' name='id' class="form-control" placeholder="id"> <br>
												</div>
												
												<div>
													<input type="text" id='titulo' name='titulo' class="form-control" placeholder="titulo"> <br>
												</div> 
												
												<div>
													<input type="text" id='categoria' name='categoria' class="form-control" placeholder="categoria"> <br>
												</div> 
																						
												<div>
													<input type="text" id='descripcion' name='descripcion' class="form-control" placeholder="descripcion">
												</div> <br>
												
												<div>
													<input type="text" id='costo' name='costo' class="form-control" placeholder="costo">
												</div> <br>
												
												<div>
													<input type=file id='archivo' name='archivo' class="form-control" id="archivo"> <br><br>
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