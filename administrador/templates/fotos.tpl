{include file="header.tpl"}
<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Modificar Eventos Programados</h3>
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
							<td> <p class="eventos"> {$fotos.archivo} </p> </td>
						</tbody>
					{foreachelse}
							<tbody>
								<td> <p class="eventos"> No hay fotos </p> </td>
							</tbody>
					{/foreach}
				</table>
				<div class="row">
					<div>
						<input type="text" id='id' class="form-control" placeholder="id">
					</div> <br>
					
					<div>
						<input type="text" id='categoria' class="form-control" placeholder="categoria"> <br>
					</div> 
					
					<div>
						<input type="text" id='titulo' class="form-control" placeholder="titulo"> <br>
					</div> 
					
					<div>
						<input type="text" id='descripcion' class="form-control" placeholder="descripcion">
					</div> <br>
					
					<div>
						<input type=file id='archivo' class="form-control" id="archivo"> <br><br>
					</div> <br>
					
					<button type="button" id="agregar" class="btn btn-success"> Agregar </button>
					
					<button type="button" id="modificar" class="btn btn-primary"> Modificar </button>
					
					<button type="button" id="eliminar" class="btn btn-danger"> Eliminar </button>
				</div>
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}