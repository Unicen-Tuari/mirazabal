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
					<form id="formualario" method="post" enctype="multipart/form-data">
						<input type="hidden" name="action" value="mail"/>
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
							<textarea rows="4" cols="50" class="requerido" name="message" id="message">
							</textarea>
						</div>
						<br>
						<button id="cargar"> Enviar </button>
						<input type="hidden" name="phpmailer">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}