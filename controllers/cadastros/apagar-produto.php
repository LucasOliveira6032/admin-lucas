<?php require("../../config.php");

$sql_apagar_produto = $db->select("UPDATE produto SET ativo=0 WHERE id_produto='$id'");
if ($sql_apagar_marca) {
    $_SESSION['tipo_aviso_lucas'] = 'success';
    $_SESSION['aviso_lucas'] = 'Marca apagada com sucesso.';
} else {
    $_SESSION['tipo_aviso_lucas'] = 'error';
    $_SESSION['aviso_lucas'] = 'Erro ao apagar marca. Tente novamente.';
}

//retorna para a pagina de listagem
header("Location: " . PATH . "listagem-produtos");
exit();