<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

if($_POST['submit'] != NULL){
	
	$idVendedor = addslashes($_POST['idVendedor']);
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
		
		//SE NÃO EXISTIR IMAGEM SELECIONADA
		
		if($numFile <= 0){
			
			mysql_query("UPDATE vendedores SET nome = '$nome', celular = '$celular', facebook = '$facebook' WHERE idVendedor = '$idVendedor'");
			
			header("location:vendedores.php?msg=sucesso"); 
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
					echo "<script type='text/javascript'>window.location.href = 'vendedores_editar.php?&msg=erro&idVendedor=$idVendedor';</script>";
					}
				else if($size > 1024 * 1024 * 5){
					echo "<script type='text/javascript'>window.location.href = 'vendedores_editar.php?&msg2=erro&idVendedor=$idVendedor';</script>";

					}
				else{
					
					// CASO TENHA EDITADO O TEXTO E A IMAGEM
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						echo "<script type='text/javascript'>window.location.href = 'vendedores.php?&num_fotos=".$numFile."&msg=sucesso';</script>";
						
						}
					else{}
					
					// CASO TENHA EDITADO SOMENTE A IMAGEM
						
	mysql_query("UPDATE vendedores SET nome = '$nome', celular = '$celular', facebook = '$facebook', imagem = '".$nomeBanco."' WHERE idVendedor = '$idVendedor'");
	
	header("location:vendedores.php?msg=sucesso"); 
				}
			}
		}
	
}


?>