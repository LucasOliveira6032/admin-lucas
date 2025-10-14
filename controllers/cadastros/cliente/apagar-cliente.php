<?php require("../../../config.php");

$sql_apagar_marca = $db->select("UPDATE clientes SET ativo=0 WHERE id_cliente='$id'");
if ($sql_apagar_marca) {
    $_SESSION['tipo_aviso_lucas'] = 'success';
    $_SESSION['aviso_lucas'] = 'Cliente apagado com sucesso.';
} else {
    $_SESSION['tipo_aviso_lucas'] = 'error';
    $_SESSION['aviso_lucas'] = 'Erro ao apagar cliente. Tente novamente.';
}

//retorna para a pagina de listagem
header("Location: " . PATH . "listagem-clientes");