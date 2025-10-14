<?php
require('../../../config.php');  //<<< é necessário pois já puxa informações do banco de dados [questões de acesso etc...]
 
$order_by = 'id_usuario';


$query = $db-> select('SELECT id_usuario FROM usuarios WHERE ativo=1'); //chamada de dados ao banco
$totalData = $db->rows($query);
$totalFiltered = $totalData;


$requestData = $_POST;

$query = "WHERE usuarios.ativo=1";

//caso haja pesquisa
if (!empty($requestData['search']['value'])){
    
    $query .= ' AND (';
    $query .= " id_usuario LIKE '%" . $requestData['search']['value'] . "%' )";
}

$select_x = $db->select("SELECT id_usuario FROM usuarios $query");
$totalFiltered = $db->rows($select_x);

if (isset($requestData['length'])) {

    if ($requestData['length'] == '-1') {
        $requestData['length'] = '18446744073709551615';
    }
}


if (isset($requestData['start'])) {

    $query .= " ORDER BY " . $order_by . "   DESC   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
}

$select_x = $db->select("SELECT * FROM usuarios $query");
$data = array();

while($row = $db->expand($select_x)){
    $nestedData = array();

    $nestedData[] = $row['id_usuario'];
    $nestedData[] = $row['nome_usuario'];
    $nestedData[] = $row['cpf_usuario'];
    $nestedData[] = '<div class="text-right">
                        <a href="editar-usuario/' . $row['id_usuario'] . '" data-toggle="tooltip" title="Editar" class="btn btn-sm btn-warning">EDITAR</a>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-id="' . $row['id_usuario'] . '" data-del="controllers/cadastros/usuario/apagar-usuario.php" title="Apagar" class="btn btn-sm btn-danger remove-btn">APAGAR</a>
                    </div>';

    $data[] = $nestedData;

}

$json_data = array(
    "draw" => intval($requestData['draw']),
    "recordsTotal" => intval($totalData),
    "recordsFiltered" => intval($totalFiltered),
    "data" => $data
);

echo json_encode($json_data);   
?>