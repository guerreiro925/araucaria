<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

if($_POST['submit'] != NULL){
	
	$idFornecedor = addslashes($_POST['idFornecedor']);
	$nome = addslashes($_POST['nome']);
	$link = addslashes($_POST['link']);

	$imagem = $_FILES['imagem'];
		
		//INFO IMAGEM
		$file 		= $imagem;
		$numFile	= count(array_filter($file['name']));
		
		//PASTA
		$folder	= 'imagens_fornecedores/';
		
		//REQUISITOS
		$permite 	= array('image/jpeg', 'image/png');
		
		//SE NÃO EXISTIR IMAGEM SELECIONADA
		
		if($numFile <= 0){
			
			mysql_query("UPDATE fornecedores SET nome = '$nome', link = '$link' WHERE idFornecedor = '$idFornecedor'");
	
			header( "location:fornecedores.php?msg2=sucesso");
		}
		
		// CASO TENHA IMAGEM 
		
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
					echo "<script type='text/javascript'>window.location.href = 'fornecedores.php?&msg=erro';</script>";
					}
				else if($size > 1024 * 1024 * 5){
					echo "<script type='text/javascript'>window.location.href = 'fornecedores.php?&msg=erro';</script>";

					}
				else{
					
					// CASO TENHA EDITADO O TEXTO E A IMAGEM
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						echo "<script type='text/javascript'>window.location.href = 'fornecedores.php?&num_fotos=".$numFile."&msg2=sucesso';</script>";
						
						}
					else{}
					
					// CASO TENHA EDITADO SOMENTE A IMAGEM
					
	mysql_query("UPDATE fornecedores SET nome = '$nome', link = '$link', imagem = '".$nomeBanco."' WHERE idFornecedor = '$idFornecedor'");
	
	header( "location:fornecedores.php?msg2=sucesso");
				}
			}
		}
	
	
	
}


?>