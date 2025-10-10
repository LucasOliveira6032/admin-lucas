<?php
require('../../../config.php');  //<<< é necessário pois já puxa informações do banco de dados
 
$order_by = 'id_cliente';

$query = $db-> select('SELECT id_cliente FROM clientes WHERE ativo=1'); //chamada de dados ao banco
$totalData = $db->rows($query);
$totalFiltered = $totalData;


$requestData = $_POST;

$query = "WHERE cliente.ativo=1";

//caso haja pesquisa
if (!empty($requestData['search']['value'])){
    
    $query .= ' AND (';
    $query .= " id_cliente LIKE '%" . $requestData['search']['value'] . "%' )";
}

$select_x = $db->select("SELECT id_cliente FROM clientes $query");
$totalFiltered = $db->rows($select_x);

if (isset($requestData['length'])) {

    if ($requestData['length'] == '-1') {
        $requestData['length'] = '18446744073709551615';
    }
}


if (isset($requestData['start'])) {

    $query .= " ORDER BY " . $order_by . "   DESC   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
}

$select_x = $db->select("SELECT * FROM clientes $query");
$data = array();

while($row = $db->expand($select_x)){
    $nesteData = array();

    $nesteData[] = $row['id_cliente'];
    $nesteData[] = $row['nome_cliente'];
    $nesteData[] = $row['razao_social_cliente'];
    $nesteData[] = $row['cnpj_cliente'];
    $nesteData[] = $row['<div class="text-right">
                            <a haref="editar-cliente/' . $row['id_cliente'] . ' " data-tolge="tooltip" title="Editar Clientes" class="btn btn-sm btn-warning">EDITAR</a>
                            <a harfer="javascript: void(0);" data-togle="tooltip" data-id=" '. $row['id_cliente'] . ' " data-del="controllers/cadastros/apagar-cliente.php" class="btn btn-sm btndanger remove-btn>APAGAR</a>
    '];
    $data[] = $nestedData;

}

$json_data = array(
    "draw" => intval($requestData['draw']),
    "recordsTotal" => intval($totalData),
    "recordsFiltered" => intval($totalFiltered),
    "data" => $data
);
?>