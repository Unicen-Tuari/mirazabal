{include file="template/header.tpl"}

<section>
				
	<div id="cabecera">
		<h2> Mira mis fotos </h2>
	</div class="galeria">
				
	<div id="galeria-small">
		{foreach $galeria as $img}
						
			<a href="visor.php?id={$img.id}" >
				<img src="{$img.archivo}" alt ="imagen" />
			</a>
		{foreachelse}
			No hay imagenes
		{/foreach}
	</div>

</section>

{include file="template/footer.tpl"}
