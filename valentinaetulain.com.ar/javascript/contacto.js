function validacion() 
{
	
	var user = document.getElementById("nombre").value;
	//alert(user);
	
	var minimoDeLetras= 3;
	var maximoDeLetras= 20;
	var longit= user.length;
	
	var dato = user.length;
	
	if (dato <= 3)
	{
		alert("Por favor ingrese su nombre");
		nombre.focus();
		return false;
	}
	
	var user = document.getElementById("email").value;
	var dato = user.lenght;
	if (dato === 0)
	{
		alert("Por favor ingrese su email");
		email.focus();
		return false;
	}
	
	var user = str.document.getElementById("message").value;
	var dato = user.lenght;
	if (dato === 0)
	{
		alert("Por favor escriba su mensaje");
		mensaje.focus();
		return false;
	}
	
}