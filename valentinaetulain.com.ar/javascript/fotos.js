//AJAX ---> Categoria
$(document).ready(function(){
	$('button').attr('id-botoncargar', 'cargar').click(function(){
		var categoria = $(this).val();
		//alert(categoria);
		$.ajax({
			url: "index.php?action=fotoscategoria",
			data: {categoria:categoria},
			success:function(data){
				$('#contenido').html(data);
			}
		})
	});
});

//AJAX ---> Carrito
function clickcomprar(idproducto){
	$.ajax({
		url: "index.php", // url a la que le pega
		type: "post",    // metodo de envio
		data: {action:"agregaracarrito", // arma objeto de tipo json con action y id
		       idproducto: idproducto},
		success:function(data){ // se ejecuta cuando esta lista la respuesta del servidor
			//alert('llego el producto'); 
		}
	});
};