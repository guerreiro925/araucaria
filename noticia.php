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

       </style>

    </head>

    <body class="appear-animate">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        
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
            <section class="small-section bg-gray-lighter" style="padding-top: 100px; background-color: #111; color: #FFF !important;">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Página do Blog</h1>
                            <div class="hs-line-4 font-alt black" style="color: #FFF !important;">
                                Veja aqui mais informações sobre a notícia do blog
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <div style="color: #FFF !important;"><a href="index.php" style="color: #fff;">Início&nbsp;</a>/&nbsp;<a href="blog.php" style="color: #fff;">Blog&nbsp;</a>/&nbsp;<span>Notícia</span></div>
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
                        <div class="col-sm-8">
                            
                            <!-- Post -->
                            <div class="blog-item mb-80 mb-xs-40">
                                
                                <!-- Text -->
                            <?php 
                            $idBlog = addslashes($_GET['idBlog']);
                            $consulta = mysql_query("SELECT * FROM blog WHERE idBlog = '$idBlog' AND deletar != 1");
                            while ($dados = mysql_fetch_array($consulta)){
                            $data = $dados['data'];
                            ?>

    							<div class="blog-item-body">
    							    
                                    <h1 class="mt-0 font-alt" style="font-family: 'alegreya_sansmedium'; font-size: 19px; color: #777"><?php echo $dados['titulo'];?></h1>
                                    <h5 style="font-weight: bold">Enviado em: <?php echo date('d/m/Y',strtotime($data));?></h5>
                                    <!-- End Text -->   
                                    
                                    <!-- Media Gallery -->
                                    <div class="blog-media mt-40 mb-40 mb-xs-30">
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
    								<div style="font-weight: bold; font-family: 'alegreya_sanslight'; color: rgb(104, 105, 109);">
										<p>
											<?php echo $dados['descricao'];?>
										</p> 								                              
                                    </div>
    							</div>
                            <?php } ?>

                                <!-- End Text -->
    							
    						</div>
    						<!-- End Post -->
						
    						
    						
    						 <div class="col-lg-10 ">                    

                                <h2 class="section-title font-alt mb-70 mb-sm-40">
                                    Faça algum comentário sobre o produto
                                </h2>
                                
                                <div class="fb-comments" data-href="noticia.php?idBlog=<?php echo addslashes(trim($_GET['idBlog'])); ?>" data-numposts="2" data-width="100%"></div>
							</div>


    						
                            
                        </div>
                        <!-- End Content -->
                        
                        <!-- Sidebar -->
                        <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">                          
                            
                            
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Notícias mais recentes</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-posts">
                                    <?php 
                                    $consulta = mysql_query("SELECT * FROM blog WHERE deletar != '1' AND status != 'inativo' ORDER BY data DESC LIMIT 6 ");
                                    while ($dados = mysql_fetch_array($consulta)){
                                    $idBlog = $dados['idBlog'];
                                    $data = $dados['data'];
                                    ?>
                                        <li class="clearfix">
                                        <?php
                                        $consultaImage = mysql_query("SELECT * FROM blog_images WHERE idBlog = '$idBlog' AND deletar != '1' LIMIT 1 ");
                                        while ($dadosImage = mysql_fetch_array($consultaImage)){

                                        ?>  
                                            <a href="noticia.php?idBlog=<?php echo $idBlog; ?>"><img src="gerenciador/<?php echo $dadosImage['imagem'];?>" style="width: 70px; height: 70px" alt="" class="widget-posts-img" /></a>
                                        <?php } ?> 
                                            <div class="widget-posts-descr" style="font-weight: bold;font-family: 'alegreya_sanslight';color: rgb(104, 105, 109);">
                                                <a href="noticia.php?idBlog=<?php echo $idBlog; ?>" title="">
                                                <?php 
                                                    if(strlen($dados['descricao']) > 70){
                                                        echo substr($dados['descricao'], 0, 70)." . . .";
                                                    }
                                                    else{
                                                        echo $dados['descricao'];
                                                    }
                                                ?></a>
                                                <?php echo date('d/m/Y',strtotime($data));?>
                                            
                                            </div>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- End Widget -->                                
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
