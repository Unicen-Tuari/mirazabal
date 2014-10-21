<div class="row">
	{foreach $galeria as $img}
		<div class="col-sx-4 col-md-3">	
			<img src="{$img.archivo}" class="img-responsive" alt ="imagen db" />
			<div class="caption">
				<h6>"{$img.titulo}"</h6>
				<p>"{$img.descripcion}"</p> 
				<button class="btn btn-default" data-toggle="modal" data-target="#myModal"> <a href="index.php?action=carrito" class="btn btn-primary" role="button"> Comprar </a> </button>
				<button class="btn btn-default" data-toggle="modal" data-target="#myModal" Onclick="verfoto({$img.id})"> Ampliar </button>
			</div><br>
		</div>
	{/foreach}
</div>