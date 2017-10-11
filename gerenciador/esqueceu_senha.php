
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

    </head>

    <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Recuperar Senha <strong class="text-custom">Arauracária Acabamentos</strong> </h3>
				<p class="text-muted font-13">
			<?php error_reporting(0); if($_GET['msg'] == 'sucesso'){
				echo '<div class="alert alert-sucess" style="margin-bottom: 0px;">Email enviado com sucesso em seu endereço, verifique sua caixa de entrada e spam, caso não chegue preencha novamente seu email abaixo.</div>';}
			else if($_GET['msg'] == 'erro'){
				echo '<div class="alert alert-danger" style="margin-bottom: 0px;">Não foi possivel enviar o email para esse endereço.</div>';}
			else if($_GET['msg2'] == 'erro'){
				echo '<div class="alert alert-danger" style="margin-bottom: 0px;">O email não existe em nossa base de dados ou o usuário foi excluído.</div>';}
			?></p>
			</div> 
			

            <div class="panel-body">
            <form class="form-horizontal m-t-20" action="recuperar_senha.php" method="post" >

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" placeholder="Preencha um email ativo na base de dados.." style="max-width: 100%; text-align: left">
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <input name="submit" style="background-color: #5fbeaa;" value="Recuperar Senha" class="btn btn-block btn-primary text-uppercase" type="submit">
                    </div>
                </div>

            </form> 
            
            </div>   
            </div>                              
                <div class="row">
            	<div class="col-sm-12 text-center">
            		<a href="login.php" class="text-primary m-l-5"><b>Voltar para página de Login</b></a>
                        
                    </div>
            </div>
            
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




    </body>
</html>