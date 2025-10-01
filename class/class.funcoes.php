<?php

function statusChamado($nome, $cor)
{
    return '<span class="label" style="background-color: ' . $cor . '">' . $nome . '</span>';
}

function statusChamadoFinalizadoOuNão($nome, $cor)
{
    if ($nome == 'Finalizado') {
        return "<td class='text-center' style='background-color: $cor '>$nome</td>";
    } else {
        return "<td class='text-center' style='background-color: #f0ad4e '>Em andamento</td>";
    }
}

function verDiaDaSemanaColocandoCor($data)
{
    $timestamp = strtotime($data);
    $diaSemana = date('l', $timestamp);

    switch ($diaSemana) {
        case 'Monday':
            $cor = 'background-color: yellow;';
            $diaSemana = 'Segunda';
            $textoCor = 'color: black;';
            break;
        case 'Tuesday':
            $cor = 'background-color: purple;';
            $diaSemana = 'Terça';
            $textoCor = 'color: white;';
            break;
        case 'Wednesday':
            $cor = 'background-color: blue;';
            $diaSemana = 'Quarta';
            $textoCor = 'color: white;';
            break;
        case 'Thursday':
            $cor = 'background-color: pink;';
            $diaSemana = 'Quinta';
            $textoCor = 'color: black;';
            break;
        case 'Friday':
            $cor = 'background-color: green;';
            $diaSemana = 'Sexta';
            $textoCor = 'color: white;';
            break;
        case 'Saturday':
            $cor = 'background-color: orange;';
            $diaSemana = 'Sábado';
            $textoCor = 'color: black;';
            break;
        case 'Sunday':
            $cor = 'background-color: red;';
            $diaSemana = 'Domingo';
            $textoCor = 'color: white;';
            break;
        default:
            $cor = '';
            $diaSemana = '';
            $textoCor = 'color: black;';
            break;
    }

    return "<td class='text-center' style='$cor $textoCor'>$diaSemana</td>";
}




function verificarStatusVisita($status, $id_venda = 0, $id_chamado = 0)
{
    $retorno = '';
    if ($status == 0) {
        $retorno .= '<span class="label label-warning">Aguardando visita</span>';
    } else if ($status == 1) {
        $retorno .= '<span class="label label-primary">Aguardando retorno visita</span>';
    } else if ($status == 2) {
        $retorno .= '<span class="label label-success">Visita finalizada</span>';
    }

    return $retorno;
}

function verificarStatusServico($status, $id_venda = 0, $id_chamado = 0)
{
    $retorno = '';
    if ($status == 0) {
        $retorno .= '<span class="label label-warning">Aguardando serviço</span>';
    } else if ($status == 1) {
        $retorno .= '<span class="label label-primary">Aguardando retorno serviço</span>';
    } else if ($status == 2) {
        $retorno .= '<span class="label label-success">Serviço finalizado</span>';
    }
    return $retorno;
}

function statusVisitaVenda($status, $id_chamado = 0, $id_venda = 0)
{
    $retorno = '';
    if ($status == 0) {
        $retorno .= '<h4 class="def_status" style="background-color: #e67e22 !important; margin-bottom: 0px">Aguardando visita</h4>';
        $retorno .= '<a href="novo-chamado-visita/' . $id_venda . '" target="_blank" class="text-center">Criar visita</a>';
    } else if ($status == 1) {
        $retorno .= '<h4 class="def_status" style="background-color: #1bbae1 !important; margin-bottom: 0px">Aguardando retorno</h4>';
        $retorno .= '<a href="detalhes-agenda/' . $id_chamado . '" target="_blank" class="text-center">Ver chamado</a>';
    } else if ($status == 2) {
        $retorno .= '<h4 class="def_status" style="background-color: #2ecc71 !important; margin-bottom: 0px">Visita finalizada</h4>';
        $retorno .= '<a href="detalhes-agenda/' . $id_chamado . '" target="_blank" class="text-center">Ver chamado</a>';
    }
    return $retorno;
}

function statusServicoVenda($status, $id_chamado = 0)
{
    $retorno = '';
    if ($status == 0) {
        $retorno .= '<h4 class="def_status" style="background-color: #e67e22 !important; margin-bottom: 0px">Aguardando serviço</h4>';
    } else if ($status == 1) {
        $retorno .= '<h4 class="def_status" style="background-color: #1bbae1 !important; margin-bottom: 0px">Aguardando retorno</h4>';
        $retorno .= '<a href="detalhes-agenda/' . $id_chamado . '" target="_blank" class="text-center">Ver chamado</a>';
    } else if ($status == 2) {
        $retorno .= '<h4 class="def_status" style="background-color: #2ecc71 !important; margin-bottom: 0px">Serviço finalizado</h4>';
        $retorno .= '<a href="detalhes-agenda/' . $id_chamado . '" target="_blank" class="text-center">Ver chamado</a>';
    }
    return $retorno;
}

function DataFiltroHome($tipo)
{
    @session_start();
    $retorno = '';

    if ($tipo == 1) {

        if (isset($_SESSION['inicialDateFilter'])) {
            $retorno = $_SESSION['inicialDateFilter'];
        } else {
            $retorno = date('Y-m-d', strtotime('-30 days'));
        }
    }

    if ($tipo == 2) {

        if (isset($_SESSION['finalDateFilter'])) {
            $retorno = $_SESSION['finalDateFilter'];
        } else {
            $retorno = date("Y-m-d");
        }
    }

    return $retorno;
}

function verificarStatusIntegracao($data_aprovacao, $data_integracao)
{
    if ($data_aprovacao == '0000-00-00' && $data_integracao == '0000-00-00') {
        return '<span class="label label-warning">SEM INTEGRAÇÃO</span>';
    } else if ($data_aprovacao !== '0000-00-00' && $data_integracao == '0000-00-00') {
        return '<span class="label label-primary">APROVADO</span>';
    } else if ($data_integracao !== '0000-00-00') {
        $data_mais_um_ano = date('Y-m-d', strtotime('+1 year', strtotime($data_integracao)));
        if ($data_mais_um_ano < date('Y-m-d')) {
            return '<span class="label label-danger">INTEGRAÇÃO VENCIDA</span>';
        } else {
            return '<span class="label label-success">INTEGRADO</span>';
        }
    }
}

function statusPedido($status)
{
    $retorno = '';

    if ($status == 1) {
        $retorno .= '<span class="label label-warning">AGUARDANDO CHECKAGEM</span>';
    } else if ($status == 2) {
        $retorno .= '<span class="label label-primary">AGUARDANDO NFE</span>';
    } else if ($status == 3) {
        $retorno .= '<span class="label label-default">AGUARDANDO DESPACHO</span>';
    } else if ($status == 4) {
        $retorno .= '<span class="label label-success">FINALIZADO</span>';
    } else if ($status == 0) {
        $retorno .= '<span class="label label-danger">AGUARDANDO ENVIAR PARA O APP</span>';
    }

    return $retorno;
}

function calcular_tempo_medio($inicio, $fim)
{
    if ($inicio == '0000-00-00 00:00:00' || $inicio == '' || $fim == '' || $fim == '0000-00-00 00:00:00') {
        return 'Ainda não é possível calcular';
    }



    $inicio_timestamp = strtotime($inicio);
    $fim_timestamp = strtotime($fim);

    if ($inicio_timestamp === false || $fim_timestamp === false) {
        return 'Ainda não é possível calcular';
    }

    if ($fim_timestamp < $inicio_timestamp) {
        return '0d 0h 0m';
    }

    $diferenca = $fim_timestamp - $inicio_timestamp;

    $dias = floor($diferenca / (60 * 60 * 24));
    $horas = floor(($diferenca % (60 * 60 * 24)) / (60 * 60));
    $minutos = floor(($diferenca % (60 * 60)) / 60);
    $segundos = $diferenca % 60;

    if ($segundos > 0 && $minutos == 0 && $horas == 0 && $dias == 0) {
        $minutos++;
    }

    return $dias . 'd ' . $horas . 'h ' . $minutos . 'm';
}

function statusPecaHistorico($id_ordem, $devolvido)
{
    $retorno = '';

    if ($id_ordem != 0) {
        $retorno .= '<span class="label label-warning">USADA</span>';
    } else if ($devolvido == 1) {
        $retorno .= '<span class="label label-danger">DEVOLVIDA</span>';
    } else {
        $retorno .= '<span class="label label-info">EM ESTOQUE</span>';
    }

    return $retorno;
}

function botoesPecaHistorico($id_historico, $id_liga, $id_ordem, $devolvido, $voltar)
{
    $retorno = '';

    if ($id_ordem != 0) {
        $retorno .= '<a target="_blank" href="detalhes-agenda/' . $id_ordem . '" data-toggle="tooltip"  title="Visualizar detalhes da ordem" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>';
    } else if ($devolvido == 1) {
        if ($_SESSION['infosUsuarioLogadoGrunnerV2']['excluir'] == 1) {
            $retorno .= '<a href="javascript:void(0);" data-toggle="tooltip" data-id="' . $id_liga . '@@@' . $id_historico . '@@@' . $voltar . '" data-del="controllers/controle/apaga-peca.php" title="Apagar peça do lançamento" class="btn btn-xs btn-danger remove-btn"><i class="fa fa-trash"></i></a>';
        } else {
            $retorno .= '';
        }
    } else {
        if ($_SESSION['infosUsuarioLogadoGrunnerV2']['excluir'] == 1) {
            $retorno .= '<a data-titulo="Deseja devolver a peça?" href="javascript:void(0);" data-toggle="tooltip" data-id="' . $id_liga . '@@@' . $id_historico . '@@@' . $voltar . '" data-del="controllers/controle/devolve-peca.php" title="Devolver peça do lançamento" class="btn btn-xs btn-warning remove-btn"><i class="fa fa-reply"></i></a>';
            $retorno .= '<a style="margin-left: 3px" href="javascript:void(0);" data-toggle="tooltip" data-id="' . $id_liga . '@@@' . $id_historico . '@@@' . $voltar . '" data-del="controllers/controle/apaga-peca.php" title="Apagar peça do lançamento" class="btn btn-xs btn-danger remove-btn"><i class="fa fa-trash"></i></a>';
        } else {
            $retorno .= '<a data-titulo="Deseja devolver a peça?" href="javascript:void(0);" data-toggle="tooltip" data-id="' . $id_liga . '@@@' . $id_historico . '@@@' . $voltar . '" data-del="controllers/controle/devolve-peca.php" title="Devolver peça do lançamento" class="btn btn-xs btn-warning remove-btn"><i class="fa fa-reply"></i></a>';
        }
    }

    return $retorno;
}

function getDiaAtual($data_atual)
{

    $dia_atual = date('D', strtotime($data_atual)); // Obtendo o dia atual em inglês
    $dias_semana = array(
        'Sun' => 'Dom',
        'Mon' => 'Seg',
        'Tue' => 'Ter',
        'Wed' => 'Qua',
        'Thu' => 'Qui',
        'Fri' => 'Sex',
        'Sat' => 'Sab'
    );
    return $dias_semana[$dia_atual]; // Traduzindo para PT-BR
}
