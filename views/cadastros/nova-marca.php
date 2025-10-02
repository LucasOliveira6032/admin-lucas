<?php include('../../includes/topo.php'); ?>
<?php include('../../includes/barra-topo.php'); ?>
<?php
if (isset($id)) {
    $infosMarca = $pesquisas->infosMarcas($id);

    //$infosMarca['nome_marca'];
    //$infosMarca['descricao_marca'];
    //$infosMarca['id_marca'];
    //$infosMarca['ativo'];
    //$infosMarca['atualiza'];

    $nome_marca = $infosMarca['nome_marca'];
    $descricao_marca = $infosMarca['descricao_marca'];
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
                                <h2 class="title float-left">Adicione uma nova marca</h2>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                                                                                            <!-- essencial para enviar arquivos e imagens para o banco -->
                                        <form action="controllers/cadastros/salvar-marca.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '0'; ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nome da Marca:</label>
                                                    <input type="text" name="nome_marca" class="form-control" id="inputEmail4" value="<?php echo isset($id) ? $nome_marca : ''; ?>" placeholder="EX: Chevrolet...">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputPassword4">Descrição:</label>
                                                     <textarea rows="5" class="form-control" name="descricao_marca" placeholder="Ex: tamanho, cor..."><?php if(isset($id)){echo $descricao_marca;}else{echo '';}?></textarea>
                                                </div>
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