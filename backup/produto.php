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

        <style type="text/css">
            h3.mt-0, h2.section-title{
                font-weight: bold;
            }
            img.other-product-img:not([draggable]), embed, object, video{
                height: 50px;
            }
            @media screen and (min-device-width: 992px){
                .img-produto{
                    width: 100%;
                    height: 150px;
                }
            }
            .label-danger{
                background: #17b1b1 !important;
                color: #111 !important;
                text-transform: capitalize;
                font-weight: bold;
            }
            a.link-categoria:visited {
                color: #17b1b1;
            }
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
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Página do Produto</h1>
                            <div class="hs-line-4 font-alt black" style="color: #FFF !important;">
                                Veja aqui mais informações sobre o produto
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <div style="color: #FFF !important;"><a href="index.php" style="color: #fff !important">Home&nbsp;</a>/&nbsp;<a href="loja.php" style="color: #fff !important">Loja&nbsp;/&nbsp;</a>Produto&nbsp;</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            <?php $idProduto = addslashes(trim($_GET['idProduto']));
	            $consultaProdutos = mysql_query("SELECT * FROM produtos WHERE idProduto = '$idProduto' AND status = 'ativo' AND deletar != '1'");
	            while($dadosProdutos = mysql_fetch_array($consultaProdutos)){ 
	            	$idCategoria = $dadosProdutos['idCategoria'];            

	            	$consultaCategoria = mysql_query("SELECT * FROM categorias WHERE idCategoria = '$idCategoria' AND status = 'ativo' AND deletar != '1'");
	            	while($dadosCategoria = mysql_fetch_array($consultaCategoria)){ 

            	?>
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <!-- Product Content -->
                    <div class="row mb-60 mb-xs-30">
                        
                        <!-- Product Images -->
                        <div class="col-md-4 mb-md-30">
                            
                            <div class="post-prev-img">

                            <?php $consultaProdutosImagemPrincipal = mysql_query("SELECT * FROM produtos_images WHERE idProduto = '$idProduto' AND deletar != '1' ORDER BY idRegistro ASC LIMIT 1");
	           					while($dadosProdutosImagemPrincipal = mysql_fetch_array($consultaProdutosImagemPrincipal)){ 
	           						$idRegistro = $dadosProdutosImagemPrincipal['idRegistro']; ?>

                                <a href="gerenciador/<?php echo $dadosProdutosImagemPrincipal['imagem']; ?>" class="lightbox-gallery-3 mfp-image"><img src="gerenciador/<?php echo $dadosProdutosImagemPrincipal['imagem']; ?>" alt="Produto - Araucária Acabamentos" /></a>

                                <div class="intro-label">
                                    <span class="label label-danger bg-red"><?php echo $dadosCategoria['titulo']; ?></span>
                                </div>

                            <?php } ?>

                            </div>
                            
                            <div class="row">
                                
                            	<?php $consultaProdutosOutrasImagens = mysql_query("SELECT * FROM produtos_images WHERE idProduto = '$idProduto' AND idRegistro != '$idRegistro' AND deletar != '1' ORDER BY idRegistro ASC");
	           						while($dadosProdutosOutrasImagens = mysql_fetch_array($consultaProdutosOutrasImagens)){ ?>

                                <div class="col-xs-3 post-prev-img">
                                    <a href="gerenciador/<?php echo $dadosProdutosOutrasImagens['imagem']; ?>" class="lightbox-gallery-3 mfp-image"><img class="other-product-img" src="gerenciador/<?php echo $dadosProdutosOutrasImagens['imagem']; ?>" alt="Produto - Araucária Acabamentos" /></a>
                                </div>

                            	<?php } ?>
                                
                            </div>
                            
                        </div>
                        <!-- End Product Images -->
                        
                        <!-- Product Description -->
                        <div class="col-sm-8 col-md-8 mb-xs-40">
                            
                            <h3 class="mt-0" style="font-size: 20px; text-transform: uppercase;"><?php echo $dadosProdutos['titulo']; ?></h3>
                            
                            <hr class="mt-0 mb-30"/>
                            
                            <div class="section-text mb-30" style="font-size: 14px;">
                                <?php echo $dadosProdutos['descricao']; ?>
                            </div>
                            
                            <hr class="mt-0 mb-30"/> 
                            
                            <div class="section-text small">
                                <div>Categoria: <a class="link-categoria" href="loja.php?idCategoria=<?php echo $dadosCategoria['idCategoria']; ?>"> <?php echo $dadosCategoria['titulo']; ?></a></div>
                            </div>
                            
                        </div>
                        <!-- End Product Description -->
                        
                    </div>
                    <!-- End Product Content -->
                    
                </div>
            </section>
            <!-- End Section -->

            <?php } } ?>

            <div class="col-lg-10 col-lg-offset-1">                    

                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Faça algum comentário sobre o produto
                    </h2>
                    
            
                <div class="fb-comments" data-href="produto.php?idProduto=<?php echo addslashes(trim($_GET['idProduto'])); ?>" data-numposts="2" data-width="100%"></div>

            </div>
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            
            <!-- Related Products -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Outros Produtos da Loja
                    </h2>
                    
                    <!-- Products Grid -->

                            <div class="row multi-columns-row">

                            <?php $consultaProdutos = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status = 'ativo' ORDER BY rand() LIMIT 4");
                                while($dadosProdutos = mysql_fetch_array($consultaProdutos)) { $idCategoria = $dados['idCategoria']; 
                                    $idProduto = $dadosProdutos['idProduto'];
                            ?>
                        
                                <!-- Shop Item -->
                                <div class="loja-responsive col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img img-produto" style="text-align: center">
                                        
                                        <?php $consultaProdutosImagens = mysql_query("SELECT * FROM produtos_images WHERE deletar != '1' AND idProduto = '$idProduto' ORDER BY idRegistro ASC LIMIT 1"); while ($dadosProdutosImagens = mysql_fetch_array($consultaProdutosImagens)) { ?><a href="produto.php?idProduto=<?php echo $idProduto; ?>"><img style="min-height: 150px; height: 150px; width: 200px; max-width: 200px;" src="gerenciador/<?php echo $dadosProdutosImagens['imagem']; ?>" alt="Produto - Araucária Acabamentos"></a><?php } ?>
                                        
                                        <div class="intro-label">
                                            <span class="label label-danger bg-red"><?php $consultaCategoria = mysql_query("SELECT * FROM categorias WHERE deletar != '1' AND status = 'ativo' AND idCategoria = '$idCategoria'"); while ($dadosCategoria = mysql_fetch_array($consultaCategoria)) { echo $dadosCategoria['titulo']; } ?></span>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="post-prev-title-produto font-alt align-center">
                                        <a href="produto.php?idProduto=<?php echo $idProduto; ?>" style="font-weight: normal; font-family: 'Gill Sans MT Pro';">
                                        <?php 
                                            if(strlen($dadosProdutos['titulo']) > 25) {
                                                echo substr($dadosProdutos['titulo'], 0, 25).". . .";
                                            } else {
                                                echo $dadosProdutos['titulo'];
                                            } 
                                        ?></a>
                                    </div>

                                    <div class="post-prev-more align-center">
                                        <a style="padding-top: 8px;" href="produto.php?idProduto=<?php echo $idProduto; ?>" class="btn btn-mod btn-round  btn-small"><i class="fa fa-eye"></i> Ver Produto</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->

                            <?php } ?>
                                
                    </div>
                    <!-- End Products Grid -->
                    
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

            <?php include("footer.php"); ?>
        
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
