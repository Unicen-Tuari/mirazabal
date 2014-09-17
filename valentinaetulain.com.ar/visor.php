<?php 

$host 	= "localhost";
$db	= "imagenes";
$user	= "root";
$pass	= "";

/* Obtenemos el id que fue pasado como parametro por URL, y luego creamos 2 variables: prev y sig que corresponden a la id anterior y siguiente de la imagen actual */ 

$id = $_GET['id'];
$prev = $id-1;
$sig = $id+1;

/* Conecta la base y obtiene la info de la img actual */

$conexion = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
$consulta = "SELECT titulo, descripcion, archivo
             FROM imagen 
			 WHERE id = $id";

$resultado = $conexion->query($consulta);
$fila = $resultado->fetch();

/* Conecta la base para obtener la primera y ultima imagen de la galeria */

$consulta = "SELECT min(id) AS minimo,
					max(id) AS maximo
			FROM imagen";
			
$resultado = $conexion->query($consulta);

$datos = $resultado->fetch();

?>

<!DOCTYPE HTML>

<html>
		
		<head>
			<title>Valentina Etulain</title>
		</head>
		
		<link rel="stylesheet" type="text/css" href="css\estilo.css" media="screen" />
		<script src="javascript\fotos.js" language="javascript" type="text/javascript"> </script>
		
		<body>
			
			<header>
				<p class="portada">
					Valentina Etulain Fotografia
				</p>
			</header>
			
			<nav>
				<ul class="cont_general">
				
					<li class="cont">
						<div class="contenedor_general">
							
							<div class="contenedor_uno">
								<a id = "Home" href = "index.html" target = _parent > <p class="texto_uno"> Home </p> </a>
							</div>
							<div class="contenedor_dos">
								<a id = "Home" href = "index.html" target = _parent > <p class="texto_dos"> Home </p> </a>
							</div>
					
						</div>	
					</li>
					
					<li class="cont">
						<div class="contenedor_general">
						
							<div class="contenedor_uno">
								<a id = "Biografia" href = "biografia.html" target = _parent > <p class="texto_uno"> Biografia </p> </a>
							</div>
							<div class="contenedor_dos">
								<a id = "Biografia" href = "biografia.html" target = _parent > <p class="texto_dos"> Biografia </p> </a>
							</div>
						</div>
					</li>
					
					<li class="cont">
						<div class="contenedor_general">
						
							<div class="contenedor_uno">
								<a id = "Eventos" href = "eventos.php" target = _parent > <p class="texto_uno"> Eventos </p> </a>
							</div>
							<div class="contenedor_dos">
								<a id = "Eventos" href = "eventos.php" target = _parent > <p class="texto_dos"> Eventos </p> </a>
							</div>
						
						</div>
					</li>
					
					<li class="cont">					
						<div class="contenedor_general">
					
							<div class="contenedor_uno">
								<a id = "Fotos" href = "fotos.php" target = _parent > <p class="texto_uno"> Fotos </p> </a>
							</div>
							<div class="contenedor_dos">
								<a id = "Fotos" href = "fotos.php" target = _parent > <p class="texto_dos"> Fotos </p> </a>
							</div>
					
						</div>
					</li>
					
					<li class="cont">
						<div class="contenedor_general">
						
							<div class="contenedor_uno">
								<a id = "Contacto" href = "contacto.html" target = _parent > <p class="texto_uno"> Contacto </p> </a>
							</div>
							<div class="contenedor_dos">
								<a id = "Contacto" href = "contacto.html" target = _parent > <p class="texto_dos"> Contacto </p> </a>
							</div>
							
						</div>
					</li>
				</ul>
			</nav>

<div id="contenedor">
	
<!-- Compara la id actual con la menor id de la tabla para saber si es la primera imagen de la galeria. Si no es igual, muestra un enlace para la imagen anterior -->	
	<?php
		if($id != $datos['minimo']){
	?>
		<a href="visor.php?id=<?php echo $prev; ?>" >
			<img src="imagenes/back.png" />
		</a>

<!-- De lo contrario, muestra una imagen indicando que no hay nada antes -->
	<?php}
	?>
			<!-- <img src="imagenes/block.png" alt="primer imagen" /> -->
	<?php }
	?>

<!-- Muestra la imagen actual en tamaño completo con su respectiva descripcion -->
	<img id="imgcompleta" src="<?php echo $fila['archivo']; ?>"
	alt="<?php echo $fila['descripcion'];?>" />

<!-- Compara la id actual con la mayor id de la tabla para saber si es la ultima imagen. Si no es igual muestra un enlace para la imagen siguiente -->
	<?php
		if($id != $datos['maximo']){
	?>
	
	<a href="visor.php?id=<?php echo $sig; ?>" >
		<img src="imagenes/next.png" />
	</a>

<!-- De lo contrario, muestra una imagen indicando que no hay nada despues -->
	<?php }
		else{
	?>
		<img src="imagenes/block.png" alt="&Uacute;ltima imagen" />
	<?php } ?>

<!-- Este div muestra la informacion de la imagen -->
	<div id="info">  
     <p>T&iacute;tulo: <?php echo $fila['titulo'];?></p>  
     <p>Descripci&oacute;n: <?php echo $fila['descripcion'];?></p>  
    </div> 

</div>

<!-- Vuelve a mostrar la galeria completa, solo que est vez las imagenes seran mas pequeñas -->
	<h2> Mis otras im&aacute;genes</h2>

	<div id="galeria-small">
		<?php
			$cons = "SELECT id, titulo, descripcion, archivo
			         FROM imagen";
			$res = $conexion->query($cons);
		
			while ($fila = $res->fetch()){
			?>
					<a href="visor.php?id=<?php echo $fila['id']; ?>" >
					<img src="<?php echo $fila['archivo']; ?>" alt ="imagen" />
				</a>	
		<?php }
		?>
	</div>	
</body>
</html>	