<?php require("../../../config.php");
$sql_apagar_produto = $db->select("UPDATE produtos SET ativo=0 WHERE id_produto='$id'");
if ($sql_apagar_produto) {
    echo 'teste';
    $_SESSION['tipo_aviso_lucas'] = 'success';
    $_SESSION['aviso_lucas'] = 'Produto apagada com sucesso.';
    
} else {
    echo 'teste2';
    $_SESSION['tipo_aviso_lucas'] = 'error';
    $_SESSION['aviso_lucas'] = 'Erro ao apagar produto. Tente novamente.';
}

//retorna para a pagina de listagem
header("Location: " . PATH . "listagem-produtos");
