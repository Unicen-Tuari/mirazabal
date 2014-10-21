$(document).ready(function(){
	$('#cargar').click(function(){
		$.ajax({
			url: "index.php?action=fotos",
			success:function(data){
				$('#contenido').html(data);
			}
		})
	});
});