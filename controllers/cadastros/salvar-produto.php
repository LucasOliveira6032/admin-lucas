<?php require("../../config.php");

if ($id == 0) {
    $sql_conferir_produto_existe = $db->select("SELECT id_produto FROM produtos WHERE nome_produto = '$nome_produto' AND ativo=1");
    if ($db->rows($sql_conferir_produto_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um produto com esse nome cadastrado.';
        echo 'teste';
        header("Location: " . PATH . "listagem-produtos");
        
        exit();
    } else {
        $sql_inserir_produto = $db->select("INSERT INTO produtos (nome_produto, id_marca_produto, ativo) 
                                          VALUES ('$nome_produto','$id_marca_produto', 1)");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Produto cadastrado com sucesso.';
        echo 'teste2';
        header("Location: " . PATH . "listagem-produtos");
        exit();
    }
} else {
    $sql_conferir_produto_existe = $db->select("SELECT id_produto FROM produtos WHERE nome_produto = '$nome_produto' AND id_produto != '$id' AND ativo=1");
    if ($db->rows($sql_conferir_produto_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um produto com esse nome cadastrado.';
        echo 'teste3';
        header("Location: " . PATH . "listagem-produtos");
        exit();
    } else {
        $sql_atualizar_produto = $db->select("UPDATE produtos SET nome_produto='$nome_produto', id_marca_produto='$id_marca_produto'  WHERE id_produto='$id'");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Produto atualizado com sucesso.';
        echo 'teste4';
        header("Location: " . PATH . "listagem-produtos");
        exit();
    }
}


header("Location: " . PATH . "listagem-produtos");
exit();
