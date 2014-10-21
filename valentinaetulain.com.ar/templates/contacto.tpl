{include file="header.tpl"}
<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Contacto </h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Gracias por dejar tu comentario! </h4>
				</div>
				<div id="contenidoform">										
					<form id="formualario" method="post" onSubmit="return validacion();" >
						<div class="contenedor_formulario">
							<label for="name">Nombre:</label>
							<br>
							<input type="text" class="requerido" id="nombre" name="nombre">
						</div>
																
						<div class="contenedor_formulario">
							<label for="email">Email:</label>
							<br>
							<input type="text" name="email" id="email"> 
						</div>

						<div class="contenedor_formulario">
							<label for="message">Mensaje:</label>
							<br>
							<input type="text" class="requerido" name="message" id="message">
						</div>
						<br>
						<button id="cargar"> Enviar </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}