<?php include("gerenciador/conexao.php"); error_reporting(0)?>
<!DOCTYPE html>
<html>
<head>
        <title>Araucária Acabamentos &copy; | Loja</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="  ">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="theme-color" content="#000">

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/favicon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/style-responsive.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">        
        <link rel="stylesheet" href="assets/css/rev-slider.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/settings.css" media="screen" />  

        <style type="text/css">
        .btn-mod{
            font-weight: bold !important;
        }
        .left, h5.widget-title, div.widget-body > ul > li{
            font-weight: bold;
        }

        @media screen and (min-device-width: 768px){
            #img-produto{
                height: 300px;
            }
        }

        @media screen and (max-device-width: 767px){
            #img-produto{
                height: 370px;
            }
        }

        @media screen and (min-device-width: 992px){
            #img-produto{
                height: 162px;
            }
        }

        @media screen and (max-device-width: 480px){
            #img-produto{
                height: 250px;
            }
        }

        .label-danger{
            background: #17b1b1 !important;
            color: #111 !important;
            text-transform: capitalize;
            font-weight: bold;
        }

        .button-store{
            padding: 10px 18px; 
            font-size: 11px; 
            letter-spacing: 2px; 
            text-decoration: none !important; 
            background: rgba(34, 34, 34, .9); 
            color: #fff !important; 
            border-radius: 2px; 
            text-transform: uppercase;
        }
        </style>

    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Carregando...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
                
            <!-- Home Section -->
            <section class="small-section bg-gray-lighter" style="padding-top: 100px; background-color: #111; color: #FFF !important;">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Página da Loja</h1>
                            <div class="hs-line-4 font-alt black" style="color: #FFF !important;">
                                Veja aqui todos os nossos produtos
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <div style="color: #FFF !important;"><a href="index.php" style="color: #fff !important">Home&nbsp;/<a href="loja.php" style="color: #fff !important">&nbsp;<span>Loja</span>&nbsp;</a></div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Home Section -->

            <!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.php" class="logo">
                            <img src="assets/img/logo-topo.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            
                            <li>
                                <a href="index.php#home"  class="mn-has-sub active">Início </a>
                            </li>
                            <li>
                                <a href="index.php#empresa"  class="mn-has-sub">A Empresa </a>
                            </li>
                            <!-- 
                            <li>
                                <a href="#vendedor"  class="mn-has-sub">Vendedores </a>
                            </li> 
                            -->
                            <li>
                                <a href="index.php#promocao"  class="mn-has-sub">Promoção </a>
                            </li>
                            <li>
                                <a href="index.php#parceiros"  class="mn-has-sub">Parceiros </a>
                            </li>
                            <li>
                                <a href="index.php#produtos"  class="mn-has-sub">Produtos </a>
                            </li>
                            <li>
                                <a href="index.php#blog"  class="mn-has-sub">Blog </a>
                            </li>
                            <li>
                                <a href="index.php#contact"  class="mn-has-sub">Fale conosco</a>
                            </li>
                            <li>
                                <a href="index.php#localizacao"  class="mn-has-sub">Localização</a>
                            </li>
                            <li><p>&nbsp;</p></li>
                            <li>
                                <a href="#" class="mn-has-sub"><i class="fa fa-search"></i> Pesquisar</a>
                                
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <div class="mn-wrap">
                                            <form method="post" action="buscar.php" class="form">
                                                <div class="search-wrap">
                                                    <button class="search-button animate" type="submit" title="Pesquisar..">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    <input type="text" name="buscar" class="form-control search-field" placeholder="Pesquisar...">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <!-- Content -->
                        <div class="col-sm-8">
                            
                            <!-- Shop options -->
                            <div class="clearfix mb-40">
                                
                                <div class="left section-text mt-10">

                                    <?php 

                                        $total_reg = "9"; // número de registros por página
                                  
                                        $pagina = addslashes(trim($_GET['pagina']));
                                        
                                            if ($pagina == NULL) {
                                                $pc = "1";
                                            } else {
                                                $pc = $pagina;
                                            }
                                      
                                        $inicio = $pc - 1;
                                        $inicio = $inicio * $total_reg;

                                        $paginacaoTitulo1 = ($pc * 9) - 8;
                                        $paginacaoTitulo2 = ($pc * 9);

                                        if(isset($_GET['idCategoria'])){
                                            $idCategoria = addslashes(trim($_GET['idCategoria']));
                                            $consultaNumProduto = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria' ORDER BY idProduto DESC");

                                            $consultaProduto = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria' ORDER BY idProduto DESC LIMIT $inicio, $total_reg");
                                            $numeroProdutos = mysql_num_rows($consultaNumProduto);

                                            $consultaCategoria = mysql_query("SELECT * FROM categorias WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria'"); while ($dadosCategoria = mysql_fetch_array($consultaCategoria)) { $tituloCategoria = $dadosCategoria['titulo']; }
                                            
                                            if($paginacaoTitulo2 > $numeroProdutos){
                                                $paginacaoTitulo2 = $numeroProdutos;
                                            }

                                            echo "Mostrando ".$paginacaoTitulo1."-".$paginacaoTitulo2." de ".$numeroProdutos." produtos encontrados para a categoria '$tituloCategoria'";
                                        } else {
                                            $consultaNumProduto = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' ORDER BY idProduto DESC");

                                            $consultaProduto = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' ORDER BY idProduto DESC LIMIT $inicio, $total_reg");
                                            $numeroProdutos = mysql_num_rows($consultaNumProduto);

                                            if($paginacaoTitulo2 > $numeroProdutos){
                                                $paginacaoTitulo2 = $numeroProdutos;
                                            }

                                            echo "Mostrando ".$paginacaoTitulo1."-".$paginacaoTitulo2." de ".$numeroProdutos." produtos encontrados";
                                        } ?>
                                </div>
                                
                            </div>
                            <!-- End Shop options -->
                            
                            <div class="row multi-columns-row">
                            	<?php 
                            		if(isset($_GET['idCategoria'])){
                            			$idCategoria = addslashes(trim($_GET['idCategoria']));
										$consultaProduto = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria' ORDER BY idProduto DESC LIMIT $inicio, $total_reg");
                            		} else {
                            			$consultaProduto = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' ORDER BY idProduto DESC LIMIT $inicio, $total_reg");
                            		}

                            	while ($dadosProduto = mysql_fetch_array($consultaProduto)) { 
                            		$idCategoria = $dadosProduto['idCategoria'];
                            		$idProduto = $dadosProduto['idProduto']; ?>
                                <!-- Shop Item -->
								<div class="col-md-4 col-lg-4 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">

                                        <?php $consultaProdutosImagens = mysql_query("SELECT * FROM produtos_images WHERE deletar != '1' AND idProduto = '$idProduto' ORDER BY idRegistro ASC LIMIT 1"); while ($dadosProdutosImagens = mysql_fetch_array($consultaProdutosImagens)) { 
                                            $imagemProduto = "gerenciador/".$dadosProdutosImagens['imagem'];
                                            ?><a href="produto.php?idProduto=<?php echo $idProduto; ?>"><img id="img-produto" src="<?php echo $imagemProduto; ?>" alt="Loja - Araucária Acabamentos"></a><?php } ?>

                                        <div class="intro-label">
                                            <span class="label label-danger bg-red"><?php $consultaCategoria = mysql_query("SELECT * FROM categorias WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria'"); while ($dadosCategoria = mysql_fetch_array($consultaCategoria)) { echo $dadosCategoria['titulo']; } ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="produto.php?idProduto=<?php echo $idProduto; ?>" style="font-weight: bold;">
                                        <?php 
                                            if(strlen($dadosProduto['titulo']) > 25) {
                                                echo substr($dadosProduto['titulo'], 0, 25).". . .";
                                            } else {
                                                echo $dadosProduto['titulo'];
                                            } 
                                        ?></a>
                                    </div>
                                    
                                    <div class="post-prev-more align-center">
                                        <a href="produto.php?idProduto=<?php echo $idProduto; ?>" class="button-store"><i class="fa fa-eye"></i> Ver Produto</a>
                                        <!-- <a href="produto.php?idProduto=<?php echo $idProduto; ?>" class="btn btn-mod btn-round  btn-small"><i class="fa fa-eye"></i> Ver Produto</a> -->
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                            	<?php } ?>
                                
                            </div>
                        
                            <!-- Pagination -->
                            <div class="pagination">
                                <?php
                                  if(addslashes(trim($_GET['idCategoria'])) == NULL) {$sql = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo'");}
                                  else {$sql = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria'");}
                                  $tr = mysql_num_rows($sql); // verifica o número total de registros
                                  $tp = ceil($tr / $total_reg); // verifica o número total de páginas
                                  
                                  $anterior = $pc -1;
                                  $proximo = $pc +1;
                                  if ($pc>1) {
                                  echo '<a style="background-color: #111; color: #fff;" href="loja.php?pagina='.$anterior.'"> < </a></li>';
                                  }
                                ?>

                                <?php for ($i = 1; $i < $tp+1; $i++){ ?>
                                    <a style="background-color: #111; color: #fff;" href="loja.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                                <?php } ?>

                                <?php
                                    if ($pc<$tp) {
                                      echo '<a style="background-color: #111; color: #fff;" href="loja.php?pagina='.$proximo.'"> > </a>';
                                    } 
                                ?>
                            </div>
                            <!-- End Pagination -->

                        </div>
                        <!-- End Content -->
                        
                        <!-- Sidebar -->
                        <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                            
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Categorias</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-menu">
                                    <?php $consultaCategoria = mysql_query("SELECT * FROM categorias WHERE deletar != '1' AND status = 'ativo'");
                                    while ($dadosCategoria = mysql_fetch_array($consultaCategoria)) { 
                                    	$idCategoria = $dadosCategoria['idCategoria'];
                                    	$titulo = $dadosCategoria['titulo'];

										$consultaNumProdCat = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria'"); $numProdutos = mysql_num_rows($consultaNumProdCat);

											if(mysql_num_rows($consultaNumProdCat) > 0){
												echo '<li><a href="loja.php?idCategoria='.$idCategoria.'">'.$titulo.'</a><small> - '.$numProdutos.' produtos</small></li>';
											}
										} ?>
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- End Widget -->
                            
                        </div>
                        <!-- End Sidebar -->
                    
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
            <!--                                 LOCALIZAÇÃO                                  -->
       
                <section class="small-section bg-dark">
                    <div class="container relative" style="text-align: center;">
                        

                            <h3 class="banner-heading font-alt" style="letter-spacing: 0px; font-size: 15px; text-transform: inherit"><i class="fa fa-map-marker" style="font-size: 18px; padding: 10px"></i>Av. das Araucárias, 302 - Jardim Novo Horizonte, Rolândia - PR</h3>

                        
                    </div>
                </section>

            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">

                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
                        <a href="#top"><img src="assets/img/logo-footer.png" alt="" /></a>
                    </div>

                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a target="_blank" style="letter-spacing: 0">Copyright &copy; 2017 | Araucária Acabamentos</a>
                        </div>
                        <!-- End Copyright -->
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->
        
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
        <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
        <script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
        <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="assets/js/gmap3.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="assets/js/all.js"></script>
        <script type="text/javascript" src="assets/js/contact-form.js"></script>
        <script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
