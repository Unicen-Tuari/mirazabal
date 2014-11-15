{include file="header.tpl"}
<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Comentarios </h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> Id </th>
						<th> Nombre </th>
						<th> E-mail </th>
						<th> Mensaje </th>
					</thead>
					{foreach $lista as $comentarios}
						<tbody>
							<td> <p class="eventos"> {$comentarios.id} </p> </td>
							<td> <p class="eventos"> {$comentarios.nombre} </p> </td>
							<td> <p class="eventos"> {$comentarios.email} </p> </td>
							<td> <p class="eventos"> {$comentarios.message} </p> </td> 
						</tbody>
					{foreachelse}
							<tbody>
								<td> <p class="eventos"> No hay Comentarios </p> </td>
							</tbody>
					{/foreach}
				</table>
				<div>
					<input type="text" id='id' class="form-control" placeholder="ID">
				</div> <br>
				<button id="borrar" class="btn btn-danger" onclick="location.href='index.php?action=borrarcomentarios'">  Borrar  </button> </a>
			</div>	
		</div>
	</div>
</section>
{include file="footer.tpl"}