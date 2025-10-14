<?php require("../../../config.php");

if ($id == 0) {
    $sql_conferir_cliente_existe = $db->select("SELECT id_cliente FROM clientes WHERE nome_cliente = '$nome_cliente_form' AND ativo=1");
    if ($db->rows($sql_conferir_cliente_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um cliente com esse nome cadastrado.';
        header("Location: " . PATH . "novo-cliente");
        
        exit();
    } else {
        $sql_inserir_cliente = $db->select("INSERT INTO clientes (nome_cliente, razao_social_cliente, cnpj_cliente, ativo ) 
                                          VALUES ('$nome_cliente','$razao_social_cliente', '$cnpj_cliente', 1)");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Cliente cadastrado com sucesso.';
        header("Location: " . PATH . "listagem-cliente");
        exit();
    }
} else {
    $sql_conferir_cliente_existe = $db->select("SELECT id_cliente FROM clientes WHERE nome_cliente = '$nome_cliente' AND id_cliente != '$id' AND ativo=1");
    if ($db->rows($sql_conferir_cliente_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um cliente com esse nome cadastrado.';
        header("Location: " . PATH . "editar-cliente/$id");
        exit();
    } else {
        $sql_atualizar_cliente = $db->select("UPDATE clientes SET nome_cliente='$nome_cliente', razao_social_cliente='$razao_social_cliente'  WHERE id_cliente='$id'");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Cliente atualizado com sucesso.';
        header("Location: " . PATH . "listagem-cliente");
        exit();
    }
}


header("Location: " . PATH . "listagem-cliente");
exit();
