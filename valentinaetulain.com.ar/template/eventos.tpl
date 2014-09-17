{include file="template/header.tpl"}
<section class="eventos">
			
	<h1> Proximos Eventos..!! </h1>
	<fieldset>
		<div class="eventos">
			{foreach $lista as $eventos}
				<a href="detalleEvento.php?id={$eventos.id}"> 
					<p> {$eventos.descripcion} </p> 
				</a>
			{foreachelse}
				No hay eventos
			{/foreach}
		</div>			
	</fieldset>

</section>
{include file="template/footer.tpl"}