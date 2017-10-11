<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

if($_POST['submit'] != NULL){
	
	$nome = addslashes($_POST['nome']);
	$celular = addslashes($_POST['celular']);
	$facebook = addslashes($_POST['facebook']);
	
	$imagem = $_FILES['imagem'];
		
		//INFO IMAGEM
		$file 		= $imagem;
		$numFile	= count(array_filter($file['name']));
		
		//PASTA
		$folder	= 'imagens_vendedores/';
		
		//REQUISITOS
		$permite 	= array('image/jpeg', 'image/png');
		
		if($numFile <= 0)
			echo "";
		else{
			for($i = 0; $i < $numFile; $i++){
				
				$name 	= $file['name'][$i];
				$type	= $file['type'][$i];
				$size	= $file['size'][$i];
				$error	= $file['error'][$i];
				$tmp	= $file['tmp_name'][$i];
				
				$extensao = @end(explode('.', $name));
				$novoNome = uniqid(time()) . ".".$extensao."";				
				
				$nomeBanco = "$folder".'/'."$novoNome";
				
				if(!in_array($type, $permite)){
					echo "<script type='text/javascript'>window.location.href = 'vendedores.php?&msg=erro';</script>";
					}
				else if($size > 1024 * 1024 * 5){
					echo "<script type='text/javascript'>window.location.href = 'vendedores.php?&msg=erro';</script>";

					}
				else{
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						echo "<script type='text/javascript'>window.location.href = 'vendedores.php?&num_fotos=".$numFile."&msg=sucesso';</script>";
						}
					else{}
					
					// CASO TENHA INCLUIDO IMAGEM E TEXTO
					
					mysql_query("INSERT INTO vendedores ( nome, celular, facebook, imagem, deletar ) VALUES ( '$nome', '$celular', '$facebook', '".$nomeBanco."', '0' )");
						
					header("location:vendedores.php?msg1=sucesso");
					
				}
			}
		}
	
	
}


?>