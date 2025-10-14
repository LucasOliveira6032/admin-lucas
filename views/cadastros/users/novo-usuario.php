<?php require('../../../includes/topo.php'); ?>
<?php require('../../../includes/barra-topo.php'); ?>
<?php
if(isset($id)){
    $infosUsuario = $pesquisas->infosUsuarios($id);

    $nome_usuario = $infosUsuario['nome_usuario'];
    $cpf_usuario = $infosUsuario['cpf_usuario'];
    $senha_usuario = $infosUsuario['senha_usuario'];
}
?>


<div class="page-container row-fluid">

    <?php include('../../../includes/menu.php'); ?>
    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>
            <div class="clearfix"></div>
                <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left"><?php echo isset($id) ? 'Editar Cliente' : 'Cadastrar Novo Cliente' ?></h2>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 padding-0"> 

                                        <form action="controllers/cadastros/usuario/salvar-usuario.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '0'; ?>">
                                            <div class="form-column mb-4" >
                                                <div class="formgroup col-md-6 mb-3">
                                                    <label for="">Nome do usuario:</label>
                                                    <input type="text" name="nome_usuario" class="form-control" placeholder="ex: Marcos Andrade..." value="<?php echo isset ($id) ? $nome_usuario : '' ;?>" >
                                                </div>
                                                <div class="formgroup col-md-6 mb-3">
                                                    <label for="">CPF do usuario:</label>
                                                    <input type="text" name="cpf_usuario" class="form-control cpf"  value="<?php echo isset($id) ? $cpf_usuario : '' ;?>" placeholder="ex 123.123.123-12...">
                                                </div>
                                                <div class="formgroup col-md-6 mb-3">
                                                    <label for="">Senha do usuario:</label>
                                                    <input type="password" name="senha_usuario" class="form-control" placeholder="sua senha..." value="<?php echo isset($id) ? $senha_usuario : '' ;?>">
                                                </div>
                                            </div>
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

<?php include('../../../includes/rodape.php'); ?>