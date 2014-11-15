{include file="header.tpl"}
<section class="contacto">
	<div class="content">
		<div class="row">						
			<div class="contacto">
					<h1> Registrate! </h1>
				<div> 
				<h4> Complete el siguiente formulario: </h4>
			</div>
															
			<form action="index.php" method="POST" onSubmit="return  validacion();" >
				<input type="hidden" name="action" value="guardarRegistro"/>											
				<div class="contenedor_formulario">
					<label for="name">Nombre:</label>
					<br>
					<input type="text" name="nombre" id="nombre">
				</div>
														
				<div class="contenedor_formulario">
					<label for="email">Email:</label>
					<br>
					<input type="text" name="email" id="email">
				</div> 
				<div class="contenedor_formulario">
					<label for="password">Password:</label>
					<br>
					<input type="password" name="pass">
				</div><br>
				<button id="cargar"> Enviar </button>
			</form>
		</div>
	</div>
</section>
{include file="footer.tpl"}