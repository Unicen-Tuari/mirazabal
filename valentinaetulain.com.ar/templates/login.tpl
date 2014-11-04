{include file="header.tpl"}
<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Contacto </h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Gracias por su visita! </h4>
				</div>
				<div id="contenidoform">										
					<form id="formualario">					
						<div class="contenedor_formulario">
							<label for="email">Email:</label>
							<br>
							<input type="text" name="email" id="email"> 
						</div>
			
						<div class="contenedor_formulario">
							<label for="message">Password:</label>
							<br>
							<input type="password">
						</div>
						<a class="vacia" href="index.php?action=registro"> 
							<p class="bio"> Aun no tengo cuenta <a href="index.php?action=registo"> </a> </p>
						</a>
						<button id="cargar"> Enviar </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}