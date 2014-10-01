{include file="header.tpl"}

<section class="galeria">
	<div class="row-fluid">
		<div class="col-sx-4 col-md-3">
			<div class="thumbnail">
				{foreach $galeria as $img}
					<a href="visor.php?id={$img.id}" >
						<img src="{$img.archivo}" class="img-responsive" alt ="imagen db" />
					</a>
					<div class="caption">
						<h6>"{$img.titulo}"</h6>
						<p>"{$img.descripcion}"</p>
						<p>
							<a href="carrito.php" class="btn btn-primary" role="button">Comprar</a>
							<a href="visor.php" class="btn btn-default" role="button">Ampliar</a>
						</p>
					</div>
				{foreachelse}
					No hay imagenes
				{/foreach}
			</div>
		</div>
	</div>
</section>

{include file="footer.tpl"}
