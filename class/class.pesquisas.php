<?php

class PESQUISAS
{

    public function infosMarcas($id_marca)
    {
        $db = new DB;
        $sql = $db->select("SELECT * FROM marcas WHERE id_marca = '$id_marca' LIMIT 1");
        $line = $db->expand($sql);
        return $line;
    }

    public function infosProdutos($id_produto)
    {
        $db = new DB;
        $sql = $db->select("SELECT * FROM produtos WHERE id_produto = '$id_produto' LIMIT 1");
        $line = $db->expand($sql);
        return $line;
    }

    public function qtdInfosHome($tipo)
    {
        $db = new DB;
        if ($tipo == 1) {
            $sql = $db->select("SELECT COUNT(*) AS qtd FROM marcas WHERE ativo = 1");
        } elseif ($tipo == 2) {
            $sql = $db->select("SELECT COUNT(*) AS qtd FROM produtos WHERE ativo = 1");
        } else {
            return "Tipo inválido.";
        }
        $line = $db->expand($sql);
        return $line['qtd'];
    }

    public function selectMarcas($id_marca)
    {
        $db = new DB;
        $sql = $db->select("SELECT * FROM marcas WHERE ativo = 1 ORDER BY nome_marca ASC");
        if ($db->rows($sql)) {
            $retorno = '<option value="">--- SELECIONE UMA MARCA ---</option>';
            while ($row = $db->expand($sql)) {
                $selected = '';
                if ($row['id_marca'] == $id_marca) {
                    $selected = 'selected';
                }
                $retorno .= '<option value="' . $row['id_marca'] . '" ' . $selected . '>' . $row['nome_marca'] . '</option>';
            }
        } else {
            $retorno = '<option value="">--- NENHUMA MARCA CADASTRADA NO SISTEMA ---</option>';
        }
        return $retorno;
    }
}
