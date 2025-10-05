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
                                                    <input type="text" name="nome_produto" class="form-control" id="inputEmail4" value="<?php echo isset($id) ? $nome_produto : ''; ?>" placeholder="EX: Refrigerante...">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Marca do produto:</label>
                                                    <select class="form-control" required name="id_marca_produto" >
                                                        <option value="0">Selecione a marca </option>
                                                        <?php
                                                         $marcas = $db->select( "SELECT * FROM marcas WHERE ativo = 1 ORDER BY nome_marca ASC");
                                                         while ($marca = mysqli_fetch_array($marcas)) {
                                                             ?>
                                                            <option value="<?php echo $marca['id_marca']; ?>" <?php echo (isset($id) && $marca_produto == $marca['id_marca']) ? 'selected' : ''; ?>><?php echo $marca['nome_marca']; ?></option>
                                                            <?php  
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="spacer"></div>
                                            <button type="submit" class="btn btn-primary"><?php echo isset($id) ? 'Salvar Alterações' : 'Cadastrar'; ?></button>
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