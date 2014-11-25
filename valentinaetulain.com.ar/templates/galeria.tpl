{include file="header.tpl"}

<section class="galeria">
	<div class="row">
		<div id="contenido">
			{foreach $lista as $categoria}
				<button class="img-galeria" id-botoncargar="cargar" value="{$categoria.categoria}"> <img class="img-galeria" src="{$categoria.archivo}"> {$categoria.categoria} </button>
			{foreachelse}
				No hay eventos
			{/foreach}
		</div>
	</div>
</section>

{include file="footer.tpl"}