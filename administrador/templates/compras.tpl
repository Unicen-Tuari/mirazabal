{include file="header.tpl"}
<section>
	<br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Compras hechas </h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th> Usuario </th>
						<th> Foto </th>
						<th> Titulo </th>
						<th> Cantidad </th>
						<th> Costo </th>
						<th> Fecha de Compra </th>
					</thead>
					{foreach $lista as $compras}
						<tbody>
							<td> <p class="eventos"> {$compras.mail} </p> </td>
							<td> <p> <img src="{$compras.archivo}" alt ="imagen db" /> </td>
							<td> <p class="eventos"> {$compras.titulo} </p> </td>
							<td> <p class="eventos"> {$compras.cantidad} </p> </td>
							<td> <p class="eventos"> {$compras.precio} </p> </td>
							<td> <p class="eventos"> {$compras.fechacompra} </p> </td>
						</tbody>
					{foreachelse}
						<tbody>
							<td> <p class="eventos"> No hay Compras </p> </td>
						</tbody>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}