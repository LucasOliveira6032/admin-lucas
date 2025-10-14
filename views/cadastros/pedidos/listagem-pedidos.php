<?php include('../../../includes/topo.php'); ?>
<?php include('../../../includes/barra-topo.php'); ?>


<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid">

    <?php include('../../../includes/menu.php'); ?>
    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                <a class="btn btn-primary" href="novo-produto">Novo Pedido</a>
            </div>
            <div class="clearfix"></div>
                <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Prodidos</h2>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0">

                                        <table class="table table-striped dt-responsive display datatable" cellspacing="0" width="100%" data-action="<?php echo PATH ?>views/cadastros/tables/produtos.php">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Nome</th>
                                                    <th>Marca</th>
                                                    <th width="150">Ações</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Nome</th>
                                                    <th>Marca</th>
                                                    <th width="150">Ações</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>

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

<?php include('../../../includes/rodape.php'); ?>
