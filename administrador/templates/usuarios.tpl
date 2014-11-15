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
						<th> Apellido </th>
						<th> Email </th>
						<th> Password </th>
					</thead>
					<tbody>
						<td> 1 </td>
						<td> Matias </td>
						<td> Irazabal </td>
						<td> mirazabal1@gmail.com </td>
						<td> 1234567890 </td>
					</tbody>
				</table>

				<div>
					<input type="text" id='id' class="form-control" placeholder="Id">
				</div> <br>
				<div>
					<input type="text" id='nombre' class="form-control" placeholder="Nombre">
				</div> <br>
				<div>
					<input type="text" id='apellido' class="form-control" placeholder="Apellido">
				</div> <br>
				<div>
					<input type="text" id='email' class="form-control" placeholder="E-mail">
				</div> <br>
				<div>
					<input type="text" id='pass' class="form-control" placeholder="password">
				</div> <br>
				
				<button type="button" id="agregar" class="btn btn-success"> Agregar </button>
								
				<button type="button" id="modificar" class="btn btn-primary"> Modificar </button>
							
				<button type="button" id="eliminar" class="btn btn-danger"> Eliminar </button>
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}