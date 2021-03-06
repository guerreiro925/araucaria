<?php 
include("conexao.php");
include("session_start.php");
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
									<h4 class="m-t-0 header-title"><b>Alterar Redes Sociais</b></h4>
									<p class="text-muted font-13 m-b-30">
                                        Preencha corretamente os campos para realizar a edição.
                                    </p>
									<?php error_reporting(0);
					  if($_GET['msg'] === 'sucesso'){
					  	echo '<div class="alert alert-sucess">Dados das Redes Sociais alterados com sucesso. </div>';
					  }
					  else if($_GET['msg'] === 'erro'){
						echo '<div class="alert alert-warning">Erro ao alterar os dados das Redes Sociais. Tente novamente mais tarde. </div>';}?>
									
<?php
					$consulta = mysql_query("SELECT * FROM redes_sociais ");
					while ($dados = mysql_fetch_array($consulta))
					
					{

?>       
									<form action="alterar_redes_sociais.php" method="post" data-parsley-validate novalidate>
									
									
										<div class="form-group">
											<label for="emailAddress">Facebook:</label>
											<input type="url" name="facebook" value="<?php echo $dados['facebook'];?>"  placeholder="Preencha um link de facebook.." class="form-control" >
										</div>
										
										<div class="form-group">
											<label for="emailAddress">Instagram:</label>
											<input type="url" name="instagram" value="<?php echo $dados['instagram'];?>"  placeholder="Preencha um link de instagram.." class="form-control" >
										</div>
										
										<div class="form-group">
											<label for="emailAddress">Twitter:</label>
											<input type="url" name="twitter" value="<?php echo $dados['twitter'];?>"  placeholder="Preencha um link de twitter.." class="form-control" >
										</div>
										
										<div class="form-group text-center m-b-0">
											<input name="submit" id="send" class="btn btn-primary " value="Alterar" type="submit">
										</div>
										
									</form>
                                    
<?php } ?>
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
		
		<!-- MASCARA INPUT CELILAR -->
		
		<script>
			mascaraTelefone(formulario.celular);
		</script>

		<!-- /MASCARA INPUT CELILAR -->


    </body>
</html>