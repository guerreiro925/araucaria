<?php
include("conexao.php");
	
		$idBlog = addslashes($_POST['idBlog']);
		$imagem = $_FILES['imagem'];
		
		// Informações da Imagem
		$file 		= $imagem;
		$numFile	= count(array_filter($file['name']));
		
		// Pasta onde as imagens irão ser armazenadas
		$folder	= 'imagens_blog/';
		
		// Extensões da Imagen Aceitas
		$permite 	= array('image/jpeg', 'image/png');
		
		if($numFile <= 0){
			header("location:blog.php?msg2=erro");
		}
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
					header("location:blog_incluir.php?msg2=erro");
				}
				else if($size > 1024 * 1024 * 5){
					echo "<script type='text/javascript'>window.location.href = 'blog_incluir.php?&msg3=erro';</script>";
				}
				else{
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						mysql_query("INSERT INTO blog_images ( idBlog, imagem, deletar ) VALUES ( '$idBlog', '$nomeBanco', '0' )");
							
						header("location:blog_incluir.php?msg=sucesso");
					}
					
				}
			}
		}

?>