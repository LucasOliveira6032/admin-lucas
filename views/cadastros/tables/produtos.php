<?php
require("../../../config.php");

$order_by = 'id_produto';

$query = $db->select("SELECT id_produto FROM produtos WHERE ativo=1");
$totalData = $db->rows($query);
$totalFiltered = $totalData;



$requestData = $_POST;


$query = 'WHERE produtos.ativo=1';

//CASO VENHA PESQUISA
if (!empty($requestData['search']['value'])) {

    $query .= ' AND (';
    $query .= " id_produto LIKE '%" . $requestData['search']['value'] . "%' )";
}

//FAZ A PESQUISA COM O FILTRO
$select_x = $db->select("SELECT id_produto FROM produtos 
                        LEFT JOIN marcas ON produtos.id_marca_produto = marcas.id_marca
$query");
$totalFiltered = $db->rows($select_x);


if (isset($requestData['length'])) {

    if ($requestData['length'] == '-1') {
        $requestData['length'] = '18446744073709551615';
    }
}


if (isset($requestData['start'])) {

    $query .= " ORDER BY " . $order_by . "   DESC   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
}



//puxa o nome da marca para mostrar na listagem marcas
$select_x = $db->select("SELECT produtos.*, marcas.nome_marca FROM produtos
                        LEFT JOIN marcas ON produtos.id_marca_produto = marcas.id_marca
 $query");
$data = array();


while ($row = $db->expand($select_x)) {
    $nestedData = array();

    $nestedData[] = $row['id_produto'];
    $nestedData[] = $row['nome_produto'];
    $nestedData[] = $row['nome_marca'];
    $nestedData[] = '<div class="text-right">
                        <a href="editar-produto/' . $row['id_produto'] . '" data-toggle="tooltip" title="Editar produtos" class="btn btn-sm btn-warning">EDITAR</a>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-id="' . $row['id_produto'] . '" data-del="controllers/cadastros/apagar-produto.php" title="Apagar marcas" class="btn btn-sm btn-danger remove-btn">APAGAR</a>
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
