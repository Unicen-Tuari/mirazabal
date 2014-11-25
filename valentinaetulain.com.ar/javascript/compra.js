$(document).ready(function(){
	$('#modal').click(function(){
		$.ajax({
			url: "index.php?action=compra",
			success:function(data){
				$('#caption').html(data);
			}
		})
	});
});