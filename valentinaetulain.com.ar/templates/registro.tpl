{include file="header.tpl"}
<section class="contacto">
	<div class="row-fluid">
		<div id="headerSeparator">	</div>
		<div class="camera_full_width">
			<div id="camera_wrap" class="camera_wrap">
				<div class="camera_fakehover">
					<h1> Registrate! </h1>
				<div> 
				<h4> Complete el siguiente formulario: </h4>
			</div>
															
			<form onSubmit="return  validacion();" >
															
				<div class="contenedor_formulario">
					<label for="name">Nombre:</label>
					<br>
					<input type="text" name="nombre" id="nombre">
				</div>
				
				<div class="contenedor_formulario">
					<label for="name">Apellido:</label>
					<br>
					<input type="text" name="apellido" id="apellido">
				</div>
														
				<div class="contenedor_formulario">
					<label for="email">Email:</label>
					<br>
					<input type="text" name="email" id="email">
				</div>			
				
				<div class="boton_enviar">
					<input type="submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>
</section>
{include file="footer.tpl"}