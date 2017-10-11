<!DOCTYPE html>
<html>
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <?php include("gerenciador/conexao.php"); error_reporting(0); ?>
        <title>Araucária Acabamentos &copy; | Blog</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
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
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">     
        <link rel="stylesheet" href="assets/css/settings.css" media="screen" />  
        <link rel="stylesheet" href="assets/css/rev-slider.css">

        <style type="text/css">
            .button-blog{
                color: #777 !important; 
                background: #e5e5e5; 
                font-family: 'alegreya_sansbold'; 
                padding: 5px 15px; 
                text-decoration: none !important; 
                text-transform: uppercase; 
                border-radius: 2px; 
                letter-spacing: 2px; 
                font-size: 12px;
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
            
            
            
            <!-- Head Section -->
            <section class="small-section bg-gray-lighter" style="padding-top: 100px;background-color: #111;color: #FFF !important;">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8" >
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Blog</h1>
                            <div class="hs-line-4 font-alt white">
                                Acompanhe todas as notícias nesse ambiente
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right" style="color: #fff;">
                                <div style="color: #fff !important"><a href="index.php" style="color: #fff !important">Início&nbsp;</a>/<a href="blog.php" style="color: #fff !important">&nbsp;<span>Blog</span>&nbsp;</a></div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                        <!-- Content -->
                            <?php
                            $total_reg = "3"; // número de registros por página
                        
                            $pagina = addslashes(trim($_GET['pagina']));
                            
                                if ($pagina == NULL) {
                                    $pc = "1";
                                } else {
                                    $pc = $pagina;
                                }
                            
                            $inicio = $pc - 1;
                            $inicio = $inicio * $total_reg;

                            $paginacaoTitulo1 = ($pc * 3) - 2;
                            $paginacaoTitulo2 = ($pc * 3);
                            ?>

                            
                        <div class="col-sm-10 col-sm-offset-1">
                            
                            <!-- Post -->

                            <?php 
                            $consulta = mysql_query("SELECT * FROM blog WHERE deletar != '1' AND status != 'inativo' ORDER by data DESC LIMIT $inicio, $total_reg");
                            while ($dados = mysql_fetch_array($consulta)){
                            $idBlog = $dados['idBlog'];
                            setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
                            date_default_timezone_set('America/Sao_Paulo');
                            $date = $dados['data'];
                            
                            ?>

                            <div class="blog-item">
                                
                                <!-- Date -->
                                <div class="blog-item-date" style="font-family: 'alegreya_sansmedium'">
                                    <span class="date-num"><?php echo strftime("%d", strtotime($date));?> / <?php echo strftime("%b", strtotime($date));?>
 <span><?php echo strftime("%y", strtotime($date));?></span></span>
                                </div>
								
                                <!-- Post Title -->
                                <h2 class="blog-item-title font-alt"><a href="noticia.php?idBlog=<?php echo $dados['idBlog'];?>"><?php echo $dados['titulo'];?></a></h2>
                                
                               
                                <!-- Media Gallery -->
                                <div class="blog-media">
                                    <ul class="clearlist content-slider">
                                        <?php
                                        $consultaImage = mysql_query("SELECT * FROM blog_images WHERE idBlog = '$idBlog' AND deletar != 1");
                                        while ($dadosImage = mysql_fetch_array($consultaImage)){

                                        ?>    
                                        <li>
                                            <img class="img-blog" src="gerenciador/<?php echo $dadosImage['imagem'];?>" alt="" />
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                
                                <!-- Text Intro -->
								<div style="color: rgb(104, 105, 109); font-family: 'alegreya_sansmedium'; font-weight: bold; font-size: 15px">
                                    <p>
                                        <?php echo $dados['descricao'];?>
                                    </p>
                                <div>
                                <!-- Read More Link -->
                                <div class="post-prev-more">
                                    <a class="button-blog" href="noticia.php?idBlog=<?php echo $idBlog; ?>">Continuar lendo <i class="fa fa-angle-right"></i></a>
                                    <br /><br />
								</div>
                                
                            </div>

                            <?php } ?>
                            <!-- End Post -->
                            
                          
                            <!-- Pagination -->
                            <div class="pagination">
                                <?php
                                  
                                  $sql = mysql_query("SELECT * FROM blog WHERE deletar != '1' AND status != 'inativo'");
                                  $tr = mysql_num_rows($sql); // verifica o número total de registros
                                  $tp = ceil($tr / $total_reg); // verifica o número total de páginas
                                  
                                  $anterior = $pc -1;
                                  $proximo = $pc +1;
                                  if ($pc>1) {
                                  echo '<a style="background-color: #111; color: #fff;" href="blog.php?pagina='.$anterior.'"> < </a></li>';
                                  }
                                ?>

                                <?php for ($i = 1; $i < $tp+1; $i++){ ?>
                                    <a style="background-color: #111; color: #fff;" href="blog.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                                <?php } ?>

                                <?php
                                    if ($pc<$tp) {
                                      echo '<a style="background-color: #111; color: #fff;" href="blog.php?pagina='.$proximo.'"> > </a>';
                                    } 
                                ?>
                            </div>
                            <!-- End Pagination -->
                            
                        </div>                        
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
            <section class="page-section pt-0 pb-0" id="localizacao">
            <!-- End Google Map -->        
                <section class="small-section bg-dark">
                    <div class="container relative" style="text-align: center;">
                        

                            <h3 class="banner-heading font-alt" style="letter-spacing: 0px; font-size: 15px; text-transform: inherit"><i class="fa fa-map-marker" style="font-size: 18px; padding: 10px"></i>Av. das Araucárias, 302 - Jardim Novo Horizonte, Rolândia - PR</h3>

                        
                    </div>
                </section>
            </section>  
			
			
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
