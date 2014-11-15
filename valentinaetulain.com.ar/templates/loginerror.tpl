{include file="header.tpl"}
<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
				<h1> Login </h1>
			</div>
			<div class="conten1">
				<div> 
					<h4> Usuario o contraseña INCORRECTA! Intente de nuevo </h4>
				</div>
				<div id="contenidoform">										
					<form id="formualario" action="index.php" method="POST">	
						<input type="hidden" name="action" value="ingresar"/>
						<div class="contenedor_formulario">
							<label for="email">Email:</label>
							<br>
							<input type="text" name="email" id="email"> 
						</div>
			
						<div class="contenedor_formulario">
							<label for="message">Password:</label>
							<br>
							<input type="password" id="pass" name="pass">
						</div>
						<a class="vacia" href="index.php?action=registro"> 
							<p class="bio"> Aun no tengo cuenta <a href="index.php?action=registo"> </a> </p>
						</a>
						<button id="cargar" type="Submit"> Enviar </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
{include file="footer.tpl"}