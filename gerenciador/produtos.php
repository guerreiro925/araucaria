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

		<!-- DATATABLE -->
		<link href="assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
		<!-- /DATATABLE -->
		
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

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box table-responsive">

									<h4 class="m-t-0 header-title"><b>Gerenciar Produtos</b></h4>
									<p class="text-muted font-13 m-b-20">
									Ações como edição e exclusão serão feitas neste ambiente.
									</p><p><?php 
										error_reporting(0);
                					  if(addslashes($_GET['msg']) == 'sucesso'){
                					  	echo '<div class="alert alert-sucess">Dados do Produto alterados com sucesso. </div>';
                					  }
                					  else if(addslashes($_GET['msg']) == 'erro'){
                						echo '<div class="alert alert-warning">Erro ao alterar dados da produto. Por favor, tente novamente mais tarde. </div>';
                					  }
                            else if (addslashes($_GET['msg2']) == 'sucesso'){
                               echo ' <div class="alert alert-sucess">Dados do Produto excluídos com sucesso. </div> '; 
                            }
                            else if (addslashes($_GET['msg3']) == 'sucesso'){
                               echo ' <div class="alert alert-sucess">Dados do Produto cadastrados com sucesso. </div> '; 
                            }
                            else if (addslashes($_GET['msg3']) == 'erro'){
                              echo ' <div class="alert alert-warning">O tamanho da imagem é maior ou igual a 5MB. Reduza o tamanho dela. </div> '; 
                            }
                            else if (addslashes($_GET['msg4']) == 'sucesso'){
                               echo ' <div class="alert alert-sucess">Adicionado a promoção no produto com sucesso, quadrado verde indica a promoção . </div> '; 
                            }
                            else if (addslashes($_GET['msg5']) == 'sucesso'){
                               echo ' <div class="alert alert-sucess">Adicionado o destaque no produto com sucesso, quadrado amarelo indica o destaque. </div> '; 
                            }
                            else if (addslashes($_GET['msg6']) == 'sucesso'){
                               echo ' <div class="alert alert-sucess">Adicionado o padrão no produto com sucesso, quadrado preto indica o padrão. </div> ';
                            }
                            else if (addslashes($_GET['msg7']) == 'sucesso'){
                               echo ' <div class="alert alert-sucess">Status do Produto alterado para inativo com sucesso.</div> '; 
                            }
                            else if (addslashes($_GET['msg8']) == 'sucesso'){
                               echo ' <div class="alert alert-sucess">Status do Produto alterado para ativo com sucesso.</div> '; 
                            }
                					  ?></p>

                                    <button type="submit" class="btn btn-primary btn-xs" onClick="window.location.href='produtos_incluir.php'"><i class="ti-plus m-r-10"></i>Adicionar Produtos</button><br/><br/>
									
									<table id="datatable-responsive"
										   class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
										   width="100%">
										<thead>
											<tr>
												<th>Código</th>
												<th>Título</th>
                        <th>Descrição</th>
                        <th>Descrição Promoção</th>
                        <th>Categoria</th>
												<th>Data</th>
												<th width="80px">Ações</th>
												<th width="80px">Status</th>
											</tr>
										</thead>
										<tbody>
                  <?php
                  $consulta = mysql_query("SELECT * FROM produtos WHERE deletar != '1'");
                  while ($dados = mysql_fetch_array($consulta)){
                    $idProduto = $dados['idProduto'];
                    $idCategoria = $dados['idCategoria'];
                    $destaque = $dados['destaque'];
                    $promocao = $dados['promocao'];
                    $status = $dados['status'];
                  ?>
											<tr>
												<td><?php echo $dados['idProduto']; ?></td>
												<td><?php echo $dados['titulo']; ?></td>
                        <td><?php 
                            if(strlen($dados['descricao']) > 150){
                                echo substr($dados['descricao'], 0, 150)."...";
                            }
                            else{
                                echo $dados['descricao'];
                            }
                        ?></td>
                        <td>
                          <?php
                            $consultaPromocao = mysql_query("SELECT * FROM produtos_promocao WHERE idProduto = '$idProduto'");
                            if(mysql_num_rows($consultaPromocao)>= 1){
                              while($dadosPromocao = mysql_fetch_array($consultaPromocao)){
                                $descricaoPromocao = $dadosPromocao['descricaoPromocao'];
                                if (empty($descricaoPromocao)){ ?>
                                  <p style="font-weight: bold">Clique em alterar para adicionar uma descrição de Promoção neste Produto.</p>
                            <?php
                                } else if (strlen($descricaoPromocao) > 150){
                                  echo substr($descricaoPromocao, 0, 150)."...";
                                } else {
                                  echo $descricaoPromocao;
                                }
                              }
                            } else { ?>
                            <p style="font-weight: bold">Produto não está em promoção para ter essa descrição.</p>
                          <?php
                            }
                          ?>
                        </td>
                        <td><?php $consultaCategoria = mysql_query("SELECT * FROM categorias WHERE idCategoria = '$idCategoria' AND deletar != '1'");
                            while ($dadosCategoria = mysql_fetch_array($consultaCategoria)){ 
                                echo $dadosCategoria['titulo'];
                            }
                            ?>
                        </td>
                        <td><?php echo date('d/m/Y', strtotime($dados['data'])); ?></td>
												<td>
<a class="btn btn-primary btn-xs" href="produtos_editar.php?idProduto=<?php echo $dados['idProduto']; ?>"><i class="fa fa-pencil"></i></a>
<a class="btn btn-danger btn-xs" href="excluir_produtos.php?idProduto=<?php echo $dados['idProduto']; ?>" onclick="return confirm('Deseja realmente excluir? Esta opção é irreversível.');"><i class="fa fa-trash-o"></i></a>
												<?php 
                        $consultaDestaque = mysql_query("SELECT * FROM produtos WHERE idProduto = '$idProduto' AND status != 'inativo'");
                        if(mysql_num_rows($consultaDestaque) >= 1){
                          if($destaque != 1 && $promocao != 1){
												?>
			<span class="btn btn-xs" onClick="window.location.href='acoes_produtos.php?acao=destaque&idProduto=<?php echo $dados['idProduto']; ?>'" alt="Clique para Destacar o produto" style="color:#ffffff; background-color: #2c3e50;">Padrão</span>
												<?php } else if($destaque != 0 && $promocao != 1){ ?>
			<span type="submit" class="btn btn-xs" onClick="window.location.href='acoes_produtos.php?acao=promocao&idProduto=<?php echo $dados['idProduto']; ?>'" alt="Clique para o Produto ficar em Promoção" style="color:#ffffff; background-color: #e67e22;">Destaque</span>
                        <?php } else if($destaque != 1 && $promocao != 0 ) { ?>
			<span type="submit" class="btn btn-xs" onClick="window.location.href='acoes_produtos.php?acao=padrao&idProduto=<?php echo $dados['idProduto']; ?>'" alt="Clique para Destacar o Produto" style="color:#ffffff; background-color: #22c32d;">Promoção</span>
												<?php } ?>
                                                <?php } else { ?>
			<span type="submit" class="btn btn-xs" alt="Ative o produto antes para relaizar ações" style="color:#ffffff; background-color: #2c3e50;">Ative o status antes de realizar ações</span>
                                                <?php } ?>
												</td>
												<td>
                                                <?php 
												$consultaStatus = mysql_query("SELECT * FROM produtos WHERE idProduto = '$idProduto' AND destaque != '0' "); 
                        $consultaStatus2 = mysql_query("SELECT * FROM produtos WHERE idProduto = '$idProduto' AND promocao != '0' ");
												if($status == 'inativo'){
                                                ?>
            <span class="btn btn-danger btn-xs" onClick="window.location.href='status_produtos.php?acao=inativo&idProduto=<?php echo $dados['idProduto']; ?>'" alt="Clique para retornar para ativo o produto">Inativo</span>
                                                <?php } else if (mysql_num_rows($consultaStatus) >= 1){ ?>
            <p style="font-weight: bold">Deixe como PADRÃO as ações para inativar</p>
                                                <?php } else if (mysql_num_rows($consultaStatus2) >= 1){ ?>
            <p style="font-weight: bold">Deixe como PADRÃO as ações para inativar</p>
                                                <?php } else { ?>
			<span type="submit" class="btn btn-primary btn-xs" onClick="window.location.href='status_produtos.php?acao=ativo&idProduto=<?php echo $dados['idProduto']; ?>'" alt="Clique para inativar o produto">Ativo</span>									
												<?php } ?>
												</td>
											</tr>
                                        <?php } ?>
										</tbody>
									</table>
								</div>
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

		<!-- DATATABLE -->
		
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap.js"></script>

		<script src="assets/js/buttons.bootstrap.min.js"></script>
		<script src="assets/js/jszip.min.js"></script>
		<script src="assets/js/pdfmake.min.js"></script>
		<script src="assets/js/vfs_fonts.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/dataTables.fixedHeader.min.js"></script>
		<script src="assets/js/dataTables.keyTable.min.js"></script>
		<script src="assets/js/dataTables.responsive.min.js"></script>
		<script src="assets/js/responsive.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.scroller.min.js"></script>
		<script src="assets/js/dataTables.colVis.js"></script>
		<script src="assets/js/dataTables.fixedColumns.min.js"></script>

		<script src="assets/js/datatables.init.js"></script>
 
		<!-- /DATATABLE -->
		
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		

        <script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/js/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>

		
		


    </body>
</html>