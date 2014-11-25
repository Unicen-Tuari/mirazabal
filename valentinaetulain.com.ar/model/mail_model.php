<?php
include_once "model.php";

class Mail extends Model{

	function enviarmail($reg){
		
		$msg = null;

		if (isset($_POST["phpmailer"])){
				
			$nombre = $_POST['nombre'];
			$dest = $_POST["email"];
			$email = 'matuira_aya@hotmail.com';
			$mensaje = $_POST["message"];
			$asunto = 'Correo enviado desde la pagina web' ;
				
			require "phpmailer/PHPMailerAutoload.php";
			
			$mail = new PHPMailer;
				  
			//indico a la clase que use SMTP
			$mail->IsSMTP();
				  
			//permite modo debug para ver mensajes de las cosas que van ocurriendo
			//$mail->SMTPDebug = 2;

			//Debo de hacer autenticación SMTP
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "ssl";

			//indico el servidor de Gmail para SMTP
			$mail->Host = "smtp.gmail.com";

			//indico el puerto que usa Gmail
			$mail->Port = 465;

			//indico un usuario / clave de un usuario de gmail
			$mail->Username = "mirazabal.94@gmail.com";
			$mail->Password = "matu37985534";
			   
			$mail->From = $email;
				
			$mail->FromName = $nombre;
				
			$mail->Subject = $asunto.' por '.$dest;
			   
			$mail->addAddress($email, $nombre);
			   
			$mail->MsgHTML($mensaje);
					 
			if($mail->Send()){
				$msg= "En hora buena el mensaje ha sido enviado con exito a $email";
				//alert('mail enviado con exito');
			}else{
				$msg = "Lo siento, ha habido un error al enviar el mensaje a $email";
				//alert('no se puedo enviar el email');
			}
		 }
	}
}
?>