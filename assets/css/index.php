<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include("gerenciador/conexao.php"); error_reporting(0); ?>
<head>
        <title>Araucária Acabamentos &copy; | Página Inicial</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="">
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
        <link rel="stylesheet" href="assets/css/rev-slider.css">
        
        <link rel="stylesheet" href="assets/css/settings.css" media="screen" />        

        <style>
            .ci-icon{
                color: #111;
                font-size: 20px;
            }
            .ci-icon:before{
                background: #fff;
            }
            .subtitulo-slider{
                font-size: 27px;
                width: 100%;
                word-break: break-word;
            }

            @media screen and (min-device-width: 768px){
                .hs-line-14{
                    font-size: 38px;
                }
                p{
                    margin: 0 30px 2em 30px;
                }
            }

            .button-product{
                background: #ccc; 
                color: #000 !important; 
                letter-spacing: 2px; 
                text-decoration: none !important; 
                text-transform: uppercase; 
                padding: 10px 40px !important; 
                font-size: 12px; 
                border-radius: 2px;
            }

            .button-blog{
                color: #777 !important; 
                background: #e5e5e5; 
                font-family: 'alegreya_sansbold'; 
                padding: 5px 15px !important; 
                text-decoration: none !important; 
                text-transform: uppercase; 
                border-radius: 2px; 
                letter-spacing: 2px; 
                font-size: 12px;
            }

            .button-contact{
                background: rgba(34, 34, 34, .9);
                padding: 12px 45px;
                font-size: 13px;
                font-weight: bold;
                color: #17b1b1;
                text-transform: uppercase;
                border-radius: 2px;
                letter-spacing: 2px;
                border: none;
            }

            .button-simulator{
                text-decoration: none !important; 
                background: transparent;
                color: #fff !important; 
                text-transform: uppercase; 
                padding: 12px 45px !important; 
                border: 2px #fff solid; 
                border-radius: 30px; 
                font-family: 'alegreya_sansbold'; 
                font-size: 13px; 
                letter-spacing: 2px;
            }
            .button-simulator:hover{
                background: #000;
                border: 2px #000 solid;
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

            <!--                                 SLIDESHOW                                  -->

            
            <!-- Fullwidth Slider -->
            <div class="home-section fullscreen-container " id="home">
                <div class="fullscreenbanner-s bg-dark">
                    <ul>         
                        <!-- Slide Item -->
                        <?php
                            $consulta = mysql_query("SELECT * FROM slides WHERE deletar != 1 AND status != 'inativo'");
                            while ($dados = mysql_fetch_array($consulta)){

                        ?>    
                        <li class="bg-dark-alfa-50" data-transition="fade" data-slotamount="7" data-title="Intro Slide">
                            
                            <img src="gerenciador/<?php echo $dados['imagem'];?>" alt="">
                                
                                <div class="subtitulo-slider  caption customin customout tp-resizeme hs-line-8 no-transp font-alt" 
                                   style="font-size: 17px;text-align: center; margin: 0 auto;"
                                   data-hoffset="0" 
                                   data-y="center" 
                                   data-voffset="-100" 
                                   data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                                   data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                   
                                   data-speed="800" 
                                   data-start="800" 
                                   data-startslide="1" 

                                   data-easing="Power4.easeOut" 
                                   data-endspeed="500" 
                                   data-endeasing="Power4.easeIn">
                                    
                                   <?php echo $dados['subtitulo'];?>
                                   
                                </div>

                                <div class="titulo-slider caption customin customout tp-resizeme hs-line-14 font-alt" 
                                   style="font-size: 33px; text-align: center; margin: 0 auto;"
                                   data-hoffset="0" 
                                   data-y="center" 
                                   data-voffset="-14" 
                                   data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                   data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                   data-speed="800" 
                                   data-start="1200" 
                                   data-startslide="1" 

                                   data-easing="Power4.easeOut" 
                                   data-endspeed="500" 
                                   data-endeasing="Power4.easeIn">
                                    
                                   <?php echo $dados['titulo'];?>
                                
                                </div>
                                              
                        </li>
                           
                        <!-- End Slide Item -->
                        <?php } ?>
                    
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div> 
                </div>
            </div>
            <!-- End Fullwidth Slider -->       
            
            
                
            

            
           
            <!-- End Fullwidth Slider -->
            
            <!--                                 MENU                                  -->

            <!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
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
                                <a href="#home"  class="mn-has-sub active">Início </a>
                            </li>
                            <li>
                                <a href="#empresa"  class="mn-has-sub">A Empresa </a>
                            </li>
                            <!--
                            <li>
                                <a href="#vendedor"  class="mn-has-sub">Vendedores </a>
                            </li>
                            -->
                            <li>
                                <a href="#simuladores"  class="mn-has-sub">Simuladores </a>
                            </li>
                            <li>
                                <a href="#parceiros"  class="mn-has-sub">Parceiros </a>
                            </li>
                            <li>
                                <a href="#produtos"  class="mn-has-sub">Produtos </a>
                            </li>
                            <li>
                                <a href="#blog"  class="mn-has-sub">Blog </a>
                            </li>
                            <li>
                                <a href="#contact"  class="mn-has-sub">Fale conosco</a>
                            </li>
                            <li>
                                <a href="#localizacao"  class="mn-has-sub">Localização</a>
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
            
            
            <!--                                 A EMPRESA                                  -->

            <section class="page-section" id="empresa">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt align-center mb-70 mb-sm-40" style="font-family: 'alegreya_sansbold';">
                        Sobre nós | Araucária Acabamentos                       
                    </h2>
                    
                    <div class="section-text">
                        <div class="row">
                            <div class="col-md-7 col-sm-7 mb-sm-50 mb-xs-30" style="font-size: 16px; text-align: justify; font-family: 'alegreya_sansmedium'; font-weight: normal">
<p>
Nossa marca coloca a qualidade e a beleza dos seus produtos em primeiríssimo lugar, aliados à durabilidade, modernidade e refinamento, sempre em busca de um perfeito acabamento, seja em pisos, forros ou rodapés. A marca traz para o mercado, produtos com novas concepções de aplicação, aliando praticidade, economia e preservação ambiental,que enriquecem os ambientes e trazem novas perspectivas para espaços especiais.
</p>


<p>
É exatamente nesta contínua busca pela funcionalidade e pela beleza destacada que reside o principal diferencial da Araucária Acabamentos e também o seu grande objetivo: garantir às pessoas uma grande variedade de materiais, todos alinhados com as últimas tendências em acabamento e decoração.
</p>

<p>
Produtos de extrema qualidade e totalmente adequados às normas brasileiras. O melhor piso vinílico, opção perfeita para ambientes novos ou mesmo onde haja piso laminado, de madeira ou porcelanato. Somos pioneiros no forro de PVC especial, produto com altíssimo padrão de acabamento, também voltado a novos espaços ou para a substituição de forro de gesso, de madeira, de PVC tradicional entre outros. 
</p>


                            </div>
                            
                            <div class="col-md-5 col-sm-5 mb-sm-50 mb-xs-30" style="text-align: right;">
                                <img src="assets/img/araucaria.png" style="text-align: center; margin: 0 auto;" class="img img-responsive img-rounded">
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End About Section -->
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->   

			<!--                                 VENDEDORES                                  -->

			
			<!-- Section -->
            <!--
            <section class="page-section" id="vendedor">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Vendedores
                    </h2>
                    
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-text align-center mb-70 mb-xs-40" style="font-family: 'alegreya_sansbold'">
                                Caso queria algum contato direto com nossos vendedores, segue abaixo alguns dados para facilitar o seu acesso á eles.
                            </div>
                        </div>
                    </div>
                   
                    
                    <div class="row multi-columns-row">
                    <?php
                        // $consulta = mysql_query("SELECT * FROM vendedores WHERE deletar != 1 AND status != 'inativo'");
                        // while ($dados = mysql_fetch_array($consulta)){

                    ?>        
                        
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30 wow fadeInUp">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="gerenciador/<?php // echo $dados['imagem'];?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                                                                
                                        <p>
                                            Entre em contato pelas seguintes redes:
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="<?php // echo $dados['facebook'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        <?php // echo $dados['nome'];?>
                                    </div>
                                    
                                    <div class="team-item-role">
                                        <?php //echo $dados['celular'];?>
                                    </div>
                                    
									<br>
									
                                </div>
                                
                            </div>
                        </div>
                    <?php // } ?>  
                       
                    </div>
                    
                </div>
            </section>
			-->
			
			<!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->   

            
            <!--                                 SIMULADORES                                  -->

            <section class="page-section bg-dark bg-dark-alfa-70 fullwidth-slider" id="simuladores" data-background="assets/img/laminados.jpg">            
               
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-grid" style="font-size: 34px;"></span>
                                </div>
                                <h3 class="small-title font-alt">Simulador de Piso Laminado</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Clique no botão abaixo para conhecer o Simulador de Piso Laminado
                                    </p>
                                    <div class="mb-10">
                                        <a href="http://simulador.eucatex.mediagroup.com.br/" target="_blank" class="button-simulator">Simulador</a>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-paintbrush" style="font-size: 34px;"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">Simulador de Decoração</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Clique no botão abaixo para conhecer o Simulador de Decoração
                                    </p>
                                    <div class="mb-10">
                                        <a href="http://www.suvinil.com.br/SimuladorV2/" target="_blank" class="button-simulator">Simulador</a>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->

                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-tools-2" style="font-size: 34px;"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">Simulador de Hidráulica</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Clique no botão abaixo para conhecer o Simulador de Hidráulica
                                    </p>
                                    <div class="mb-10">
                                        <a href="http://www.tigre.com.br/pt/simuladores_2011.php" target="_blank" class="button-simulator">Simulador</a>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                

            </section>        
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->

            <!--                                 FORNECEDORES / PARCEIROS                                  -->

            <section class="page-section" id="parceiros">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt align-center mb-70 mb-sm-40" style="font-family: 'alegreya_sansbold';">
                        Parceiros                      
                    </h2>
                    
                    <!-- Intro Text -->
                    <div class="row mb-70 mb-xs-30">
                        <div class="col-md-12">
                            <div class="section-text align-center" style="font-family: 'alegreya_sansbold'">
                                 Conheça nossos parceiros que assim como nós, prezam pela qualidade e beleza de seus produtos.
                            </div>
                        </div>
                    </div>
                    <!-- End Intro Text -->
                    
                    <!-- Logo Grid -->
                    <div class="row multi-columns-row alt-features-grid">
                        
                        <!-- Logo Item -->
                        <?php
                        $consulta = mysql_query("SELECT * FROM fornecedores WHERE deletar != 1 AND status != 'inativo'");
                        while ($dados = mysql_fetch_array($consulta)){

                        ?>                                            
                        
                        <div class="col-sm-4 col-md-2 col-lg-2 border-parceiros">
                            <div class="alt-features-item align-left">
                                <div style="width: 100px;" class="alt-features-icon">
                                    <a href="<?php echo $dados['link'];?>"><img src="gerenciador/<?php echo $dados['imagem'];?>" class="border-responsive" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Logo Item -->

                        <!-- Logo Item -->
                        <!-- <div class="border-parceiros-left col-sm-4 col-md-2 col-lg-2 ">
                            <div class="alt-features-item align-left">
                                <div style="width: 100px;" class="alt-features-icon" >
                                    <img src="assets/img/img-f-6.png" class="border-responsive" alt="" />
                                </div>
                            </div>
                        </div> -->
                        <!-- End Logo Item -->

                        <?php } ?>

                    </div>
                    <!-- End Logo Grid -->
                    
                </div>
            </section>

            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
                                       
            <!--                                 PRODUTOS                                  -->

            <section class="page-section pb-0" id="produtos">
                <div class="relative">
                    
                    <h1 class="section-title font-alt align-center mb-70 mb-sm-40" style="font-family: 'alegreya_sansbold';">
                        Produtos em Destaque
                    </h1>
                   

                    <div class="container">
                        <div class="row">
                        <?php 
                                $consulta = mysql_query("SELECT * FROM produtos WHERE deletar != '1' AND status !='inativo' AND destaque != '0' LIMIT 6");
                                if (mysql_num_rows($consulta) >= 1 ){
                        ?>
                            <div class="col-md-10 col-md-offset-1">
                            
                    <!-- Works Grid -->
                            <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        
                                <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid" style="position: relative; height: 0px;">
                                
                                <!-- Work Item (External Page) -->
                                <?php
                                
                                while ($dados = mysql_fetch_array($consulta)){
                                    $idProduto = $dados['idProduto'];
                                ?>
                                <li class="work-item">
                                    <a href="produto.php?idProduto=<?php echo $idProduto;?>" class="work-ext-link">
                                        <div class="work-img">
                                        <?php
                                        $consultaImage = mysql_query("SELECT * FROM produtos_images WHERE idProduto = '$idProduto' AND deletar != '1' LIMIT 1");
                                        while ($dadosImage = mysql_fetch_array($consultaImage)){

                                        ?> 
                                            <img class="work-img" src="gerenciador/<?php echo $dadosImage['imagem'];?>" alt="<?php echo $dados['titulo'];?>" style="height: 250px;">
                                        <?php } ?>
                                        </div>
                                        <div class="work-intro">
                                            <h3 class="work-title"><?php echo $dados['titulo'];?></h3>
                                        </div>
                                    </a>
                                </li>
                                <?php 
                                    } 
                                 ?>
                                <!-- End Work Item -->
                                </ul>
                            </ul>

                            </div>
                        <?php } else { ?>
                            <div class="col-md-12">
                                <li class="work-item" style="width: 100%; text-align: center; margin: 0 auto; list-style-type: none">
                                        <h3 class="work-title" style="text-align: center">Não existe nenhum produto em destaque</h3>
                                </li><br><br>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                   
                    
                </div>
            </section>
            <section class="small-section bg-dark">
                <div class="container relative">
                    
                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Conheça o nosso catálogo completo de produtos</h3>
                        <div class="local-scroll">
                            <!-- <a href="loja.php" class="btn btn-mod btn-w btn-medium btn-round">Clique aqui</a> -->
                            <a href="loja.php" class="button-product">Clique aqui</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
			
            <!--                                 BLOG                                  -->
			
            <section class="page-section" id="blog">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                        Notícias mais recentes
                        
                        <a href="blog.php" class="section-more right">Ver todas as notícias <i class="fa fa-angle-right"></i></a>
                        
                    </h2>
                    
                    <div class="row multi-columns-row">
                        
                        <!-- Post Item -->
					<?php 
                        $consulta = mysql_query("SELECT * FROM blog WHERE deletar != '1' AND status !='inativo' ORDER by data DESC LIMIT 3");
                        while ($dados = mysql_fetch_array($consulta)){
                            $idBlog = $dados['idBlog'];
							$data = $dados['data'];
                    ?>
						<div class="blog-responsive col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s" style="text-align: center">
                            
                            <div class="post-prev-img">
                                <?php
                                    $consultaImage = mysql_query("SELECT * FROM blog_images WHERE idBlog = '$idBlog' AND deletar != 1 LIMIT 1");
                                    while ($dadosImage = mysql_fetch_array($consultaImage)){
                                ?>                                            
                                <a href="noticia.php?idBlog=<?php echo $idBlog; ?>"><img style="max-width: 330px; width: 330px; height: 200px; max-height: 200px;" src="gerenciador/<?php echo $dadosImage['imagem']; ?>" alt="" /></a> 
                                    <?php } ?>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                <a href="noticia.php?idBlog=<?php echo $idBlog; ?>"><?php echo $dados['titulo'];?></a>
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                <a href="noticia.php?idBlog=<?php echo $idBlog; ?>"><?php echo date('d/m/Y',strtotime($data)); ?></a>
                            </div>
                            
                            <div class="post-prev-text">
                                <?php 
                                    if(strlen($dados['descricao']) > 70){
                                        echo substr($dados['descricao'], 0, 70)." . . .";
                                    }
                                    else{
                                        echo $dados['descricao'];
                                    }
                                ?>
                            </div>
                            
                            <div class="post-prev-more">
                                <!-- <a href="noticia.php?idBlog=<?php echo $idBlog; ?>" class="btn btn-mod btn-gray btn-round">Continuar lendo <i class="fa fa-angle-right"></i></a> -->
                                <a href="noticia.php?idBlog=<?php echo $idBlog; ?>" class="button-blog">Continuar lendo <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                    <?php } ?>
                        <!-- End Post Item -->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Blog Section -->
			
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            <!--                                 CONTATO                                  -->

            <section class="page-section" id="contact">
                <div class="container relative">
                    
                    <h1 class="font-alt mb-70 mb-sm-40" style="text-align: center; font-family: 'alegreya_sansbold'; color: #17b1b1">
                        Fale conosco
                    </h1>
                    
                    <div class="row">
                        
                        <div class="col-md-12 mb-sm-40">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6 pt-20 pb-20 pb-xs-0">
                                    <h2 class=" font-alt mb-20 mb-sm-40" style="font-family: 'alegreya_sansmedium';">
                                        Contato
                                    </h2>
                                    <h5 style="font-size: 19px; font-family: 'alegreya_sansmedium';">
                                        Entre em contato conosco através dos seguintes.
                                    </h5>

                                    <div class="contact-item padding-left">
                                        
                                        <h5 class=" font-alt mb-20 mb-sm-40" style="text-transform: lowercase; font-family: 'alegreya_sansmedium'; font-size: 16px; line-height: 28px;">
                                        contato@araucariaacabamentos.com.br<br>
                                        comercial@araucariaacabamentos.com.br<br>
                                        diretoria@araucariaacabamentos.com.br<br>
                                        financeiro@araucariaacabamentos.com.br<br>
                                        </h5>
                                
                                        <div class="ci-icon" style="background: #FFF;">
                                            <i class="fa fa-envelope"></i>
                                        </div>

                                    </div>

                                    <div class="contact-item padding-left">
                                        <h4 class="mb-20 mb-sm-40" style="font-weight: normal; font-family: 'alegreya_sansmedium'; font-size: 16px; line-height: 28px;">                                        
                                            (43) 3015 - 7500<br>
                                            (43) 3402 - 7865
                                        </h4>
                                        
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Phone -->
                                
                                <!-- Address -->
                                <div class="col-sm-5 col-lg-5 col-lg-offset-1 pt-20 pb-20 pb-xs-0">
                                    
                                    <div class="contact-item"><h2 class=" font-alt mb-20 mb-sm-40" style="font-family: 'alegreya_sansmedium';">
                                        Deixe uma Mensagem
                                    </h2><?php 
                					  if($_GET['msg'] == 'sucesso'){
                					  	echo '<div class="alert alert-sucess" style="margin-bottom: 0px;">sucesso. </div>';
                					  }else if($_GET['msg'] == 'erro'){
                                        echo '<div class="alert alert-error" style="margin-bottom: 0px;">Erro. </div>';
                                      }
                                    ?>
                                        <!-- Form -->
                                        <form method="post" action="envioemail.php" id="form" role="form" class="form">
                                            


                                            <div class="mb-20 mb-md-12">
                                                <!-- Name -->
                                                <input type="text" name="nome" id="name" class="input-md form-control" placeholder="Seu nome" maxlength="100">
                                            </div>
                                            
                                            <div class="mb-20 mb-md-12">
                                                <!-- Email -->
                                                <input type="email" name="email" id="email" class="input-md form-control" placeholder="Seu email" maxlength="100">
                                            </div>    
                                                                                 
                                            <div class="mb-20 mb-md-12">
                                                <textarea name="mensagem" id="text" class="input-md form-control" rows="8" placeholder="Digite aqui sua mensagem" maxlength="400"></textarea>
                                            </div>
                                            
                                            <div class="mb-20 mb-md-12">
                                                <!-- <input type="submit" name="submit" class="btn btn-mod btn-large btn-round" value="Enviar"> -->
                                                <input type="submit" name="submit" class="button-contact" value="Enviar">
                                            </div>
                                                                        
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                </div>
                                <!-- End Address -->
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </section>


            <!--                                 LOCALIZAÇÃO                                  -->
            <script type="text/javascript">
                function activeMap() {
                    document.getElementById("mapGoogle").style.pointerEvents = "auto";
                }
            </script>

            <section class="page-section pt-60 pb-0" id="localizacao" onclick="activeMap()" >
                <iframe id="mapGoogle" style="pointer-events: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.8699713548076!2d-51.3938724850268!3d-23.320476084803005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eca64a61b5d68b%3A0xec1f1db78eba4ab2!2sAv.+das+Arauc%C3%A1rias%2C+302+-+Jardim+Novo+Horizonte%2C+Rol%C3%A2ndia+-+PR%2C+86600-000!5e0!3m2!1spt-BR!2sbr!4v1498591472179" width="100%" height="500" frameborder="0" style="border: 0;" allowfullscreen></iframe>            
            </section>
            <!-- End Google Map -->        
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
        <script type="text/javascript" src="assets/js/all.js"></script> <!-- JS DO MENU RESPONSIVE  -->
        <script type="text/javascript" src="assets/js/contact-form.js"></script>
        <script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/js/rev-slider.js"></script>        
        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
