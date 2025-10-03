<?php require("../../config.php");

if ($id == 0) {
    $sql_conferir_produto_existe = $db->select("SELECT id_produto FROM produtos WHERE nome_produto = '$nome_produto' AND ativo=1");
    if ($db->rows($sql_conferir_produto_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um produto com esse nome cadastrado.';
        header("Location: " . PATH . "novo-produto");
        exit();
    } else {
        $sql_inserir_produto = $db->select("INSERT INTO produtos (nome_produto, marca_produto_, ativo) 
                                          VALUES ('$nome_produto','$marca_produto', 1)");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Produto cadastrado com sucesso.';
    }
} else {
    $sql_conferir_produto_existe = $db->select("SELECT id_produto FROM marcas WHERE nome_produto = '$nome_produto' AND id_produto != '$id' AND ativo=1");
    if ($db->rows($sql_conferir_produto_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um produto com esse nome cadastrada.';
        header("Location: " . PATH . "editar-produto/$id");
        exit();
    } else {
        $sql_atualizar_produto = $db->select("UPDATE produtos SET nome_produto='$nome_produto', marca_produto='$marca_produto'  WHERE id_marca='$id'");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Produto atualizado com sucesso.';
    }
}


header("Location: " . PATH . "listagem-produtos");
exit();
