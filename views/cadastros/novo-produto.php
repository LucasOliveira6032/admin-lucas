<?php include('../../includes/topo.php'); ?>
<?php include('../../includes/barra-topo.php'); ?>
<?php
if (isset($id)) {
    $infosProduto = $pesquisas->infosProdutos($id);

    //$infosMarca['nome_marca'];
    //$infosMarca['descricao_marca'];
    //$infosMarca['id_marca'];
    //$infosMarca['ativo'];
    //$infosMarca['atualiza'];

    $nome_produto = $infosProduto['nome_produto'];
    $marca_produto = $infosProduto['marca_produto'];
}
?>

<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid">

    <?php include('../../includes/menu.php'); ?>
    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>
            <div class="clearfix"></div>
                <section class="box ">
                      <header class="panel_header">
                                <h2 class="title float-left">Adicione um novo produto</h2>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                                                                                            <!-- essencial para enviar arquivos e imagens para o banco -->
                                        <form action="controllers/cadastros/salvar-produto.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '0'; ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nome do produto:</label>
                                                    <input type="text" name="nome_marca" class="form-control" id="inputEmail4" value="<?php echo isset($id) ? $nome_produto : ''; ?>" placeholder="EX: Refrigerante...">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="input-group col-md-6">
                                                    <label for="inputEmail4">Marca do produto:</label>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    <div class="input-group-append ">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="spacer"></div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </form>

                                    </div>
                                </div>

                            </div>      
                </section>
            </div>

        </section>
    </section>

    <div class="chatapi-windows ">


    </div>
</div>

<?php include('../../includes/rodape.php'); ?>