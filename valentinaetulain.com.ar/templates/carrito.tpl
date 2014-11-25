{include file="header.tpl"}
<section>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th> Producto </th>
					<th> Titulo </th>
					<th> Cantidad </th>
					<th> Costo </th>
				</tr>
			</thead>
				<tbody>	
					{foreach $lista as $compra}
						<tr>
							<td> <img class="carrito" src="imagenes/{$compra.id}.jpg"> </td>
							<td> {$compra.titulo} </td>
							<td> 1 </td>
							<td> {$compra.costo} </td>
						</tr>
					{foreachelse}
						<tr>
							<td> No realizo compras aun </td>
						</tr>
					{/foreach}
				</tbody>
		</table>
	</div>	
</section>
{include file="footer.tpl"}