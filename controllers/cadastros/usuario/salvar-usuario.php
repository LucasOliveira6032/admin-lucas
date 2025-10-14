<?php require("../../../config.php");

$senha_criptografada = md5($senha_usuario);

if ($id == 0) {
    $sql_conferir_usuario_existe = $db->select("SELECT id_usuario FROM usuarios WHERE nome_usuario = '$nome_usuario' AND ativo=1");
    if ($db->rows($sql_conferir_usuario_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um usuario com esse nome cadastrado.';
        echo 'teste';
        header("Location: " . PATH . "listagem-usuarios");
        
        exit();
    } else {
        $sql_inserir_usuario = $db->select("INSERT INTO usuarios (nome_usuario, cpf_usuario, senha_usuario, ativo) 
                                          VALUES ('$nome_usuario','$cpf_usuario', '$senha_criptografada', 1)");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Usuario cadastrado com sucesso.';
        echo 'teste2';
        header("Location: " . PATH . "listagem-usuarios"); 
        exit();
    }
} else {
    $sql_conferir_usuario_existe = $db->select("SELECT id_usuario FROM usuarios WHERE nome_usuario = '$nome_usuario' AND id_usuario != '$id' AND ativo=1");
    if ($db->rows($sql_conferir_usuario_existe) > 0) {
        $_SESSION['tipo_aviso_lucas'] = 'error';
        $_SESSION['aviso_lucas'] = 'Já existe um usuario com esse nome cadastrado.';
        echo 'teste3';
        header("Location: " . PATH . "listagem-usuarios");
        exit();
    } else {
        $sql_atualizar_usuario = $db->select("UPDATE usuarios SET nome_usuario='$nome_usuario', cpf_usuario='$cpf_usuario', senha_usuario='$senha_criptografada'  WHERE id_usuario='$id'");
        $_SESSION['tipo_aviso_lucas'] = 'success';
        $_SESSION['aviso_lucas'] = 'Usuario atualizado com sucesso.';
        echo 'teste4';
        header("Location: " . PATH . "listagem-usuarios");
        exit();
    }
}


header("Location: " . PATH . "listagem-usuarios");
exit();
