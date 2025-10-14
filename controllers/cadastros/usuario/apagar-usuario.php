<?php require("../../../config.php");

$sql_apagar_usuario = $db->select("UPDATE usuarios SET ativo=0 WHERE id_usuario='$id'");
if ($sql_apagar_usuario) {
    $_SESSION['tipo_aviso_lucas'] = 'success';
    $_SESSION['aviso_lucas'] = 'usuario apagado com sucesso.';
    
} else {
    echo 'teste2';
    $_SESSION['tipo_aviso_lucas'] = 'error';
    $_SESSION['aviso_lucas'] = 'Erro ao apagar usuario. Tente novamente.';
}

//retorna para a pagina de listagem
header("Location: " . PATH . "listagem-usuarios");
