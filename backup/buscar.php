<?php include("gerenciador/conexao.php"); ?>
<!DOCTYPE html>
<html>
<head>
        <title>Araucária Acabamentos &copy; | Página Inicial</title>
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

    </head>

    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Carregando...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">

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
                                <a href="index.php#home" onclick="window.location = 'index.php#home'" class="mn-has-sub active">Início </a>
                            </li>
                            <li>
                                <a href="index.php#empresa" onclick="window.location = 'index.php#empresa'" class="mn-has-sub">A Empresa </a>
                            </li>
                            <li>
                                <a href="index.php#vendedor" onclick="window.location = 'index.php#vendedor'" class="mn-has-sub">Vendedores </a>
                            </li>
                            <li>
                                <a href="index.php#simuladores" onclick="window.location = 'index.php#simuladores'" class="mn-has-sub">Simuladores </a>
                            </li>
                            <li>
                                <a href="index.php#parceiros" onclick="window.location = 'index.php#parceiros'" class="mn-has-sub">Parceiros </a>
                            </li>
                            <li>
                                <a href="index.php#produtos" onclick="window.location = 'index.php#produtos'" class="mn-has-sub">Produtos </a>
                            </li>
                            <li>
                                <a href="index.php#blog" onclick="window.location = 'index.php#blog'" class="mn-has-sub">Blog </a>
                            </li>
                            <li>
                                <a href="index.php#contact" onclick="window.location = 'index.php#contact'" class="mn-has-sub">Fale conosco</a>
                            </li>
                            <li>
                                <a href="index.php#localizacao" onclick="window.location = 'index.php#localizacao'" class="mn-has-sub">Localização</a>
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
                       
            <!-- Head Section -->
            <section class="small-section bg-gray-lighter" style="padding-top: 100px; background-color: #111; color: #FFF !important;">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Página de Pesquisa</h1>
                            <div class="hs-line-4 font-alt black" style="color: #FFF !important;">
                                Veja aqui os resultados sobre a sua pesquisa
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <div style="color: #FFF !important;"><a style="color: #FFF !important;" href="index.php">Home</a>&nbsp;/&nbsp;Pesquisa</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            <!-- Related Products -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h3 class="mt-0" style="font-weight: bold; color: #17b1b1; text-align: center; text-transform: uppercase;">
                        Resultados da Pesquisa
                    </h3>

                    <div class="col-lg-12">
                        
                        <h2 class="section-title font-alt mb-70 mb-sm-40" style="text-transform: capitalize; text-align: left; font-weight: bold; margin-bottom: 0px;">Notícias do Blog:
                        </h2>

                        <br />

                        <?php 
                            if(isset($_POST['buscar'])){
                                $buscar = addslashes(trim($_POST['buscar']));
                                $consultaNoticiaBlog = mysql_query("SELECT * FROM blog WHERE deletar != '1' AND status = 'ativo' AND titulo LIKE '%$buscar%'");
                                while($dadosNoticiaBlog = mysql_fetch_array($consultaNoticiaBlog)){
                                    $numNoticiaBlog = mysql_num_rows($consultaNoticiaBlog);                                  
                                    $idBlog = $dadosNoticiaBlog['idBlog'];                                     
                                    $tituloNoticiaBlog = $dadosNoticiaBlog['titulo'];  

                                    if($numNoticiaBlog > 0){
                                        echo "<a style='font-weight: bold' href='noticia.php?idBlog=$idBlog'>$tituloNoticiaBlog</a><br />"; 
                                    }

                                }

                                if($numNoticiaBlog == 0) {
                                    echo "<span style='font-weight: bold'>Nenhuma notícia do blog encontrada</span><br />";
                                }  

                            }
                        ?>

                    </div>

                    <div class="col-lg-12">

                        <br />
                        
                        <h2 class="section-title font-alt mb-70 mb-sm-40" style="text-transform: capitalize; text-align: left; font-weight: bold; margin-bottom: 0px;">Categorias de Produtos:
                        </h2>

                        <br />

                        <?php 
                            if(isset($_POST['buscar'])){
                                $buscar = addslashes(trim($_POST['buscar']));
                                $consultaCategoria = mysql_query("SELECT * FROM categorias WHERE deletar != '1' AND status = 'ativo' AND titulo LIKE '%$buscar%'");
                                while($dadosCategoria = mysql_fetch_array($consultaCategoria)){
                                    $numCategorias = mysql_num_rows($consultaCategoria);                                  
                                    $idCategoria = $dadosCategoria['idCategoria']; 
                                    $tituloCategoria = $dadosCategoria['titulo'];    

                                    if($numCategorias > 0){
                                        echo "<a style='font-weight: bold' href='loja.php?idCategoria=$idCategoria'>$tituloCategoria</a><br />"; 
                                    }

                                }

                                if($numCategorias == 0) {
                                    echo "<span style='font-weight: bold'>Nenhuma categoria encontrada</span><br />";
                                } 

                            }
                                 
                        ?>

                    </div>

                    <div class="col-lg-12">

                        <br />

                        <h2 class="section-title font-alt mb-70 mb-sm-40" style="text-transform: capitalize; text-align: left; font-weight: bold; margin-bottom: 0px;">Produtos:
                        </h2>

                        <br />

                        <?php 
                            if(isset($_POST['buscar'])){
                                $buscar = addslashes(trim($_POST['buscar']));
                                $consultaProdutos = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' AND titulo LIKE '%$buscar%'");
                                while($dadosProdutos = mysql_fetch_array($consultaProdutos)){
                                    $numProdutos = mysql_num_rows($consultaProdutos);                                  
                                    $idProduto = $dadosProdutos['idProduto']; 
                                    $tituloProduto = $dadosProdutos['titulo'];

                                    if($numProdutos > 0){
                                        echo "<a style='font-weight: bold' href='produto.php?idProduto=$idProduto'>$tituloProduto</a><br />"; 
                                    }

                                }

                                if($numProdutos == 0) {
                                    echo "<span style='font-weight: bold'>Nenhum produto encontrado</span><br />";
                                }  

                            }
                        ?>

                    </div>

                    <div class="col-lg-12">

                        <br />
                        
                        <h2 class="section-title font-alt mb-70 mb-sm-40" style="text-transform: capitalize; text-align: left; font-weight: bold; margin-bottom: 0px;">Vendedores:
                        </h2>

                        <br />

                        <?php 
                            if(isset($_POST['buscar'])){
                                $buscar = addslashes(trim($_POST['buscar']));
                                $consultaVendedores = mysql_query("SELECT * FROM vendedores WHERE deletar != '1' AND status = 'ativo' AND nome LIKE '%$buscar%'");
                                while($dadosVendedores = mysql_fetch_array($consultaVendedores)){
                                    $numVendedores = mysql_num_rows($consultaVendedores);                                  
                                    $nomeVendedor = $dadosVendedores['nome'];                                 
                                    $facebookVendedor = $dadosVendedores['facebook']; 

                                    if($numVendedores > 0){
                                        echo "<a style='font-weight: bold' href='$facebookVendedor'>$nomeVendedor</a><br />"; 
                                    }

                                }

                                if($numVendedores == 0) {
                                    echo "<span style='font-weight: bold'>Nenhum vendedor encontrado</span><br />";
                                }  

                            } 
                        ?>

                    </div>
                    
                </div>
            </section>
            <!-- End Related Products -->
            


            <!--                                 LOCALIZAÇÃO                                  -->    
                <section class="small-section bg-dark">
                    <div class="container relative" style="text-align: center;">
                        
                        <h3 class="banner-heading font-alt" style="letter-spacing: 0px; font-size: 15px; text-transform: inherit"><i class="fa fa-map-marker" style="font-size: 18px; padding: 10px"></i>Av. das Araucárias, 302 - Jardim Novo Horizonte, Rolândia - PR</h3>

                        
                    </div>
                </section>
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
