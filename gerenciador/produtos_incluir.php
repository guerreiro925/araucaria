<?php 
include("conexao.php");
session_start();

if( (!isset($_SESSION['usuario']) == true ) )
{
	unset ($_SESSION['login']);
	header('location:login.php');	
}

	$sessaousuario = $_SESSION ['usuario']; // Ativando esta variável + 'nome' = inicia a visualização do perfil do usuário//
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#000">
		<link rel="shortcut icon" href="assets/images/favicon.png">


        <title>Painel Administrativo - Araucária Acabamentos</title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="assets/css/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

        <style type="text/css">
            .form-group{
                text-align: left;
            }
            input.form-control{
                max-width: 100%;
            }
            textarea.form-control{
                max-width: 100%;
            }
            select.form-control{
                max-width: 100%;
            }
        </style>
        
    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

        <?php include("menu.php"); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Incluir Produtos</b></h4>
									<p class="text-muted font-13 m-b-30">
	                                    Preencha corretamente os campos para realizar a inclusão.
	                                </p>
										<?php error_reporting(0);
										  if(addslashes($_GET['msg']) === 'sucesso'){
										  	echo '<div class="alert alert-sucess">Dados do Produto cadastrados com sucesso. </div>';
										  }
										  else if(addslashes($_GET['msg']) === 'erro'){
											echo '<div class="alert alert-warning">Erro ao incluir dados do Produto. Por favor, tente novamente mais tarde. </div>';}?>
		                                        
									<form action="cadastro_produtos.php" method="post" data-parsley-validate novalidate>
									
										<div class="form-group">
											<label for="">Título:</label>
											<input type="text" name="titulo" parsley-trigger="change" required placeholder="Preencha um titúlo.." class="form-control" id="titulo">
										</div>
										
										<div class="form-group">
											<label for="">Descrição</label>
											<textarea name="descricao" class="form-control" parsley-trigger="change" required> </textarea>
											<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
											<script type="text/javascript">
												CKEDITOR.replace('descricao');
											</script>
										</div>
                                        
                                        <div class="form-group">
                                            <label for="">Categoria:</label>
                                            <select name="idCategoria" class="form-control" required>
                                                <option value="">Escolha uma opção</option>
                                                <?php include_once("conexao.php");
                                                    $consulta = mysql_query("SELECT * FROM categorias WHERE deletar != '1' ORDER BY idCategoria DESC");
                                                    while($dados = mysql_fetch_array($consulta)){
                                                ?>
                                                    <option value="<?php echo $dados['idCategoria']; ?>"><?php echo $dados['titulo']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Data:</label>
                                            <input type="date" name="data" parsley-trigger="change" required class="form-control" id="data">
                                        </div>
										
										<div class="form-group text-center m-b-0">
											<input name="submit" id="send" class="btn btn-primary " value="Prosseguir" type="submit">
											<button type="reset" class="btn btn-default  m-l-5" onClick="window.location.href='produtos.php'">
												Voltar
											</button>
										</div>
										
									</form>
								</div>
							</div>
                        </div>


                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include("rodape.php"); ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>

        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.waypoints.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>

        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/raphael-min.js"></script>

        <script src="assets/js/jquery.knob.js"></script>

        <script src="assets/js/jquery.dashboard.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>
		
		<!-- FORM VALIDATION -->

		<script type="text/javascript" src="assets/js/parsley.min.js"></script>
        
        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>
			
		<!-- /FORM -->
		


    </body>
</html>