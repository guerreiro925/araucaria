            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo" style="font-weight: bold; letter-spacing: 0px; font-size: 15px;"><i class="icon-c-logo" style="color: #fff;"><img src="assets/images/favicon-logo.png"></i><span><img src="assets/images/logo-topo.png" /></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><?php echo $sessaousuario; ?></a>
                                    <ul class="dropdown-menu">
                                        <li><?php $consulta = mysql_query("SELECT * FROM usuarios WHERE nome = '$sessaousuario' AND status = 'ativo' AND deletar != '1'");
                                            while($dados = mysql_fetch_array($consulta)){
                                        ?>
                                        <a href="usuarios_editar.php?&idUsuario=<?php echo $dados['idUsuario']; ?>"><i class="ti-import m-r-10 text-danger"></i> Trocar sua senha</a>
                                        <?php } ?>
                                        </li>
                                        <li><a href="session.php?acao=sair"><i class="ti-power-off m-r-10 text-danger"></i> Sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navegação</li>

                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class="ti-home"></i> <span> Início </span></a>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Usuários </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="usuarios_incluir.php">Cadastrar</a></li>
                                    <li><a href="usuarios.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-gallery"></i> <span> Slide Show </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="slideshow_incluir.php">Cadastrar</a></li>
                                    <li><a href="slideshow.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-truck"></i> <span> Fornecedores </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="fornecedores_incluir.php">Cadastrar</a></li>
                                    <li><a href="fornecedores.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> Categorias </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="categorias_incluir.php">Cadastrar</a></li>
                                    <li><a href="categorias.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i> <span> Produtos </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="produtos_incluir.php">Cadastrar</a></li>
                                    <li><a href="produtos.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-mouse-alt"></i> <span> Blog </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="blog_incluir.php">Cadastrar</a></li>
                                    <li><a href="blog.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-facebook"></i> <span> Redes Sociais </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="redes_sociais_editar.php">Gerenciar</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="session.php?acao=sair" class="waves-effect"><i class="ti-power-off"></i> <span> Sair </span></a>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->