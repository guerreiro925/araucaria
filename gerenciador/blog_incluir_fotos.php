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

        <script type="text/javascript">
            $.fn.enumerar = function() {
                var num = 2;
                this.each(function() {
                    $(this).children('.numeracao').text(num);
                    num++;
                });
                return this;
            };
            $(document).ready(function(){
              console.log($(".respContent"));
              $("#btnAddResp").click(function(e){
                e.preventDefault();
                  var htmlBox = $("#resp").html();
                  var $newResp = $("<div />");
                  console.log($(".respContent"));
                  console.log($(".respContent").children(':last-child').children('.numeracao').text());
                  var ultNum = Number($(".respContent").children(':last-child').children('.numeracao').text()) + 1;
                  $newResp.html(htmlBox);
                  $newResp.children('.numeracao').text(ultNum);

                  if($(".respContent").html() === '') {
                    $newResp.children('.numeracao').text(2);
                  }
                  $(".respContent").append($newResp);
              });
                
              $(".respContent").on('click','.remover',function(e) {
                e.preventDefault();
                var $box = $(this).closest('.respContent');
                $(this).parent().remove();
                $box.children().enumerar();
              });
            });
        </script>
                
        <script type="text/javascript">
            var qtdeCampos = 0;
                
            function addCampos() {
              var objPai = document.getElementById("campoPai");
              //Criando o elemento DIV;
              var objFilho = document.createElement("div");
              //Definindo atributos ao objFilho:
              objFilho.setAttribute("id","filho"+qtdeCampos);
              
              //Inserindo o elemento no pai:
              objPai.appendChild(objFilho);
              //Escrevendo algo no filho recém-criado:
              document.getElementById("filho"+qtdeCampos).innerHTML = "<label for=''>Imagem:</label><input type='file' accept='image/jpg, image/jpeg, image/png' name='imagem[]' class='form-control'><button type='button' onclick='removerCampo("+qtdeCampos+")' class='btn btn-default'>Apagar campo</button><br /><br />";
              qtdeCampos++;
            }
                
            function removerCampo(id) {
              var objPai = document.getElementById("campoPai");
              var objFilho = document.getElementById("filho"+id);

              //Removendo o DIV com id específico do nó-pai:
              var removido = objPai.removeChild(objFilho);
            }
        </script>

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
                                    <h4 class="m-t-0 header-title"><b>Incluir Fotos para a Notícia</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Preencha corretamente os campos para realizar a inclusão.<br>
										É aceitável somente imagens com formato jpeg e png e o tamanho máximo de 5MB.
                                    </p>
                                        <?php error_reporting(0);
                                          if($_GET['msg'] === 'sucesso'){
                                            echo '<div class="alert alert-info">Dados da Notícia cadastrados com sucesso. </div>';
                                          }
                                          else if($_GET['msg'] === 'erro'){
                                            echo '<div class="alert alert-info">Erro ao incluir dados da notícia, tente novamente mais tarde. </div>';}?>
                                                
                                    <form action="cadastro_blog_fotos.php" method="post" enctype="multipart/form-data" data-parsley-validate novalidate>

                                        <?php include_once("conexao.php");

                                            $idBlog = addslashes(trim($_GET['idBlog']));

                                            $consulta = mysql_query("SELECT * FROM blog WHERE idBlog = '$idBlog' AND deletar != '1'");
                                            while($dados = mysql_fetch_array($consulta)) {

                                        ?>

                                        <a style="text-transform:uppercase; text-decoration:none;" href="#" class="a" id="btnAddResp" onClick="addCampos()"><span class="fa fa-plus"></span> Adicionar Fotos</a><br /><br />
                                    
                                        <div class="form-group">
                                            <label for="">Título:</label>
                                            <input type="text" value="<?php echo $dados['titulo']; ?>" class="form-control" disabled>
                                        </div>

                                        <input type="hidden" name="idBlog" value="<?php echo $idBlog; ?>">

                                        <?php } ?>


                                        <div class="form-group">
                                            <label for="">Imagem:</label>
                                            <input type="file" accept="image/jpg, image/jpeg, image/png" name="imagem[]" class="form-control">
                                            <br />                        
                                            <div id="campoPai"></div>
                                        </div>
                                        
                                        <div class="form-group text-center m-b-0">
                                            <input name="submit" id="send" class="btn btn-primary " value="Enviar e Concluir" type="submit">
                                            <button type="reset" class="btn btn-default  m-l-5" onClick="window.location.href='blog.php'">
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