{include file="header.tpl"}
<section class="eventos">
	<div class="container">
		<div class="row-fluid">
			<div id="headerSeparator">	</div>
			<div class="camera_full_width">
				<div id="camera_wrap" class="camera_wrap">
					<div class="camera_fakehover">
						<h1> Proximos Eventos..!! </h1>
						<div class="eventos">
							<div class="col-xs-10"
								{foreach $lista as $eventos}
								<a href="detalleEvento.php?id={$eventos.id}"> 
									<p> {$eventos.descripcion} </p> 
								</a>
								{foreachelse}
									No hay eventos
								{/foreach}
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</div>			
</section>
{include file="footer.tpl"}