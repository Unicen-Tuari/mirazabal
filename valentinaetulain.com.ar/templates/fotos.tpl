<div class="row">
	{foreach $galeria as $img}
		<div class="col-sx-4 col-md-3">	
			<img src="{$img.archivo}" class="img-responsive" alt ="imagen db" />
			<div class="caption">
				<h6>"{$img.titulo}"<h6>
 				<p>"{$img.descripcion}"</p>
				<p>Costo: ${$img.costo} </p>
				<button class="btn btn-default" data-toggle="modal" id="comprar" onclick="clickcomprar({$img.id})"> Comprar</a> </button>
					<!-- Modal -->
					<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"> Complete los campos para realizar la compra</h4>
								</div>
								<div class="modal-body">
									<form action="index.php?action=cargarcarrito" method="POST">
										<label for="ejemplo_email_1">E-mail</label> <br>
										<input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su email"> <br>
														
										<label for="ejemplo_email_1">Codigo de imagen</label> <br>
										<input type="text" class="form-control" id="idfoto" name="idfoto" placeholder="Ingrese codigo de imagen"> <br>
										
										<label for="ejemplo_email_1">Cantidad</label> <br>
										<input type="text" class="form-control" id="cant" name="cant" placeholder="Ingrese la cantidad"> <br>
								  
										<label for="ejemplo_password_1"> Nº Tarjeta de credito </label> <br>
										<input type="password" class="form-control" id="tarjeta" name="tarjeta" placeholder="Nº Tarjeta de credito"> <br>

										<input type="submit" name="carrito" /> 
									</form>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div> <br>
			</div>
		{/foreach}
	</div>
</div>