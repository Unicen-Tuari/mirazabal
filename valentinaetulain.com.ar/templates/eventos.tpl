{include file="header.tpl"}
<section>
	<div class="content">
		<div class="row">						
			<div class="eventos">
				<h1> Proximos Eventos..!! </h1>
			</div>
			<div class="conten1">
				{foreach $lista as $eventos}
					<a href="index.php?action=detalleEvento&id={$eventos.id}"> 
						<p class="eventos"> {$eventos.descripcion} </p>
					</a>
				{foreachelse}
					No hay eventos
				{/foreach}
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}