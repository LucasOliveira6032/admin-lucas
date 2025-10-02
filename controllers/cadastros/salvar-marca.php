<?php require("../../config.php");

if ($id == 0) {
    $sql_conferir_marca_existe = $db->select("SELECT id_marca FROM marcas WHERE nome_marca = '$nome_marca' AND ativo=1");
    if ($db->rows($sql_conferir_marca_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe uma marca com esse nome cadastrada.';
        header("Location: " . PATH . "nova-marca");
        exit();
    } else {
        $sql_inserir_marca = $db->select("INSERT INTO marcas (nome_marca, descricao_marca, ativo) 
                                          VALUES ('$nome_marca','$descricao_marca', 1)");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Marca cadastrada com sucesso.';
    }
} else {
    $sql_conferir_marca_existe = $db->select("SELECT id_marca FROM marcas WHERE nome_marca = '$nome_marca' AND id_marca != '$id' AND ativo=1");
    if ($db->rows($sql_conferir_marca_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe uma marca com esse nome cadastrada.';
        header("Location: " . PATH . "editar-marca/$id");
        exit();
    } else {
        $sql_atualizar_marca = $db->select("UPDATE marcas SET nome_marca='$nome_marca', descricao_marca='$descricao_marca'  WHERE id_marca='$id'");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Marca atualizada com sucesso.';
    }
}


header("Location: " . PATH . "listagem-marcas");
exit();
