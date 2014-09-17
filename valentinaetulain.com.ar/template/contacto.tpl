{include file="template/header.tpl"}
<section class="contacto">
				
	<h1> Contacto </h1>
	<div> 
		<h4> Gracias por dejar tu comentario! </h4>
	</div>
				
	<form action="contactoExito.html" onSubmit="return  validacion();" > <!-- action="php\execute.php" method="POST" -->
					
		<div class="contenedor_formulario">
			<label for="name">Nombre:</label>
			<br>
			<input type="text" name="name" id="nombre">
		</div>
					
		<div class="contenedor_formulario">
			<label for="email">Email:</label>
			<br>
			<input type="text" name="email" id="email">
		</div>

		<div class="contenedor_formulario">
			<label for="message">Mensaje:</label>
			<br>
			<textarea name="message" id="message"></textarea>
			<br>
		</div>

		<div class="boton_enviar">
			<input type="submit" value="Enviar">
		</div>
	</form>
{include file="template/footer.tpl"}

</section>