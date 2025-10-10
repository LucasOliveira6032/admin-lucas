<?php
require("../../../config.php");

$order_by = 'id_marca';

$query = $db->select("SELECT id_marca FROM marcas WHERE ativo=1");
$totalData = $db->rows($query);
$totalFiltered = $totalData;

$requestData = $_POST;


$query = 'WHERE ativo=1';

//CASO VENHA PESQUISA
if (!empty($requestData['search']['value'])) {

    $query .= ' AND (';
    $query .= " nome_marca LIKE '%" . $requestData['search']['value'] . "%' )";
}

//FAZ A PESQUISA COM O FILTRO
$select_x = $db->select("SELECT id_marca FROM marcas $query");
$totalFiltered = $db->rows($select_x);


    if (isset($requestData['length'])) {

        if ($requestData['length'] == '-1') {
            $requestData['length'] = '18446744073709551615';
        }
    }


    if (isset($requestData['start'])) {

        $query .= " ORDER BY " . $order_by . "   DESC   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
    }




$select_x = $db->select("SELECT * FROM marcas $query");
$data = array();


while ($row = $db->expand($select_x)) {
    $nestedData = array();

    $nestedData[] = $row['id_marca'];
    $nestedData[] = $row['nome_marca'];
    $nestedData[] = '<div class="text-right">
                        <a href="editar-marca/' . $row['id_marca'] . '" data-toggle="tooltip" title="Editar marcas" class="btn btn-sm btn-warning">EDITAR</a>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-id="' . $row['id_marca'] . '" data-del="controllers/cadastros/apagar-marca.php" title="Apagar marcas" class="btn btn-sm btn-danger remove-btn">APAGAR</a>
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
