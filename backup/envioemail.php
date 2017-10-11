<!DOCTYPE html><html><head>

        <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'>

</head><body>


<?php
include("conexao.php");
if($_POST['submit'] != NULL){
    $nome = addslashes($_POST['nome']);
	$mensagem = addslashes($_POST['mensagem']);
	$email = addslashes($_POST['email']);
	$sendemail = "contato@araucariaacabamentos.com.br";
				
			$to = "$sendemail";
			$subject = "Contato Fale Conosco [Araucária Acabamentos]";
			
			$htmlContent = "
			<div style='background-color:  #fff; width: 800px; height: auto; margin: 0 auto; padding: 0; border: 3px solid rgba(0, 188, 212, 0.46)'>
				<header style='background-color: #0bc;  padding:5px 0px 5px 0px; '>
					<h2 style='text-align: center; text-transform: uppercase; color: #0bc;'>Araucária Acabamentos | Contato de Fale Conosco</h2>
				</header>
				<div style='text-align: center; padding-bottom: 15px; background-color: #fff;  max-width: 650px; margin: 0 auto; margin-bottom: 15px;'>
					<p style='padding-top: 15px; color: #0bc; word-wrap:break-word'>Através do Fale conosco do site, foi solicitado a seguinte dúvida: </p>
					<p style='background-color: #00bbcc; padding: 15px; width: 350px; margin: 0 auto; margin-bottom: 15px; word-wrap:break-word; color: #fff; width: 800px'>NOME: $nome <br> EMAIL: $email <br /> MENSAGEM: $mensagem </p><br>
				</div>
			</div>
			";
			
			// Set content-type for sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			// Additional headers
			$headers .= 'From: Araucaria acabamentos <'.$email.'>' . "\r\n";
			$headers .= 'Cc: ' . "\r\n";
			
			// Send email
			mail($to,$subject,$htmlContent,$headers);
			echo "<script>alert('Enviado com sucesso');</script>";
			echo "<script>window.location.href='index.php';</script>";
			
	} else{

echo "<script>alert('Não foi possível enviar o email');</script>";
echo "<script>window.location.href='index.php';</script>";
	
}
?>
</body></html>