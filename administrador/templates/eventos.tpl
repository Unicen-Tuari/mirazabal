{include file="header.tpl"}
<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Modificar Eventos Programados</h3>
			</div>
			<form method="POST">
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
						</tbody>
					{foreachelse}
							<tbody>
								<td> <p class="eventos"> No hay Comentarios </p> </td>
							</tbody>
					{/foreach}
				</table>
					<div class="row">
						<div>
							<input type="text" id='id' class="form-control" placeholder="id">
						</div> <br>
						
						<div>
							<input type="text" id='administrador' class="form-control" placeholder="Administrador"> <br>
						</div> 
						
						<div>
							<input type="text" id='pais' class="form-control" placeholder="Pais"> <br>
						</div> 
						
						<div>
							<input type="text" id='localidad' class="form-control" placeholder="Localidad">
						</div> <br>
						
						<div>
							<input type="text" id='fecha' class="form-control" placeholder="aaaa-mm-dd">
						</div> <br>
						
						<div>
							<input type="text" id='hora' class="form-control" placeholder="hora">
						</div> <br>
						
						<div>
							<input type="text" id='descripcion' class="form-control" placeholder="Descripcion">
						</div> <br>
						
						<button id="agregar" class="btn btn-success" onclick="location.href='index.php?action=agregarevento'">  Agregar  </button> </a>
						
						<button id="modificar" class="btn btn-primary"> Modificar </button>
						
						<button id="eliminar" class="btn btn-danger"> Eliminar </button>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
{include file="footer.tpl"}