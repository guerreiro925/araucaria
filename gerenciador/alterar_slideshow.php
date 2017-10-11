<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

if($_POST['submit'] != NULL){
	
	$idSlide = addslashes($_POST['idSlide']);
	$titulo = addslashes($_POST['titulo']);
	$subtitulo = addslashes($_POST['subtitulo']);
	
	$imagem = $_FILES['imagem'];
		
		//INFO IMAGEM
		$file 		= $imagem;
		$numFile	= count(array_filter($file['name']));
		
		//PASTA
		$folder	= 'imagens_slideshow/';
		
		//REQUISITOS
		$permite 	= array('image/jpeg', 'image/png');
		
		//SE NÃO EXISTIR IMAGEM SELECIONADA
		
		if($numFile <= 0){
			
			mysql_query("UPDATE slides SET titulo = '$titulo', subtitulo = '$subtitulo' WHERE idSlide = '$idSlide'");
	
			header("location:slideshow.php?msg=sucesso"); 
	
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
					echo "<script type='text/javascript'>window.location.href = 'slideshow.php?&msg=erro';</script>";
					}
				else if($size > 1024 * 1024 * 5){
					echo "<script type='text/javascript'>window.location.href = 'slideshow.php?&msg2=erro';</script>";

					}
				else{
					
					// CASO TENHA EDITADO O TEXTO E A IMAGEM
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						echo "<script type='text/javascript'>window.location.href = 'slideshow.php?&num_fotos=".$numFile."&msg=sucesso';</script>";
						
						}
					else{}
					
					// CASO TENHA EDITADO SOMENTE A IMAGEM
					
	mysql_query("UPDATE slides SET titulo = '$titulo', subtitulo = '$subtitulo', imagem= '".$nomeBanco."' WHERE idSlide = '$idSlide'");
	
	header( "location:slideshow.php?msg=sucesso");
				}
			}
		}	
	
}


?>