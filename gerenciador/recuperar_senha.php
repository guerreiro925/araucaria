<!DOCTYPE html><html><head>

        <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'>

</head><body>


<?php
include("conexao.php");
if($_POST['submit'] != NULL){
	$emailcontato = "araucaria@hotmail.com";
	$sendemail = addslashes($_POST['email']);
	$consulta = mysql_query("SELECT * FROM usuarios WHERE email='$sendemail' AND deletar != '1' AND status != 'inativo'");
	$verificar = mysql_num_rows($consulta);
	if($verificar <= 0){
		
	echo "<script>window.location.href='esqueceu_senha.php?msg2=erro';</script>";
		
	}
	
	else{
		
	while ($dados = mysql_fetch_array($consulta)){
		$nome = $dados['nome'];
		$senha = $dados['senha'];
		$email = $dados['email'];
		$senha_descriptografada = base64_decode($senha);
				
			$to = "$sendemail";
			$subject = "Recuperação de senha [Araucária Acabamentos]";
			
			$htmlContent = "
			<div style='background-color:  #fff; width: 800px; height: auto; margin: 0 auto; padding: 0; border: 3px solid rgba(0, 188, 212, 0.46)'>
				<header style='background-color: #0bc;  padding:5px 0px 5px 0px; '>
					<h2 style='text-align: center; text-transform: uppercase; color: #0bc;'>Araucária Acabamentos | Recuperação de senha</h2>
				</header>
				<div style='text-align: center; padding-bottom: 15px; background-color: #fff;  max-width: 650px; margin: 0 auto; margin-bottom: 15px;'>
					<p style='padding-top: 15px; color: #0bc; word-wrap:break-word'>Foi solicitado para este email uma recuperação de senha, abaixo segue os dados do seu cadastro, caso queira alterar os seus dados visite o painel e acesse a aba \"Mudar minha Senha\" no canto direito superior ao entrar no sistema. :</p>
					<p style='background-color: #00bbcc; padding: 15px; width: 450px; margin: 0 auto; margin-bottom: 15px; word-wrap:break-word; color: #fff;'>USUÁRIO: $nome , SENHA: $senha_descriptografada </p><br />
					<a href='http://mhsdevelopers.com.br/abstract/gerenciador/login.php' style='text-decoration: none; text-transform: uppercase; color: #fff; border: none; outline: none; margin: 0 auto; background-color: #0bc; padding: 15px'>Ir para Painel Administrativo</a>
				</div>
			</div>
			";
			
			// Set content-type for sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			// Additional headers
			$headers .= 'From: Araucaria acabamentos <'.$emailcontato.'>' . "\r\n";
			$headers .= 'Cc: ' . "\r\n";
			
			// Send email
			mail($to,$subject,$htmlContent,$headers);
			echo "<script>window.location.href='esqueceu_senha.php?msg=sucesso';</script>";
			
		}
	}
}else{

echo "<script>window.location.href='esqueceu_senha.php?msg=erro';</script>";	
	
}
?>
</body></html>