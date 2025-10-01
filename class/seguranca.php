<?php

foreach($_POST as $nome_campo => $valor){	
	
	if(!is_array($valor)){
		
		//$valor = $db->escape($valor);
		$valor = str_replace('<script', '', $valor);
		$valor = str_replace('\"', '', $valor);
		$comando = "$" . $nome_campo . '="$valor";';
		@eval($comando);				
	
	} 
	
}

//Recebe as variaveis do GET - PERMITINDO APENAS NUMEROS
	foreach($_GET as $nome_campo => $valor){	

		if(!is_array($valor)){	
		    //$valor = $db->escape($valor);
			$valor = str_replace('<script', '', $valor);
			$valor = str_replace('"', '', $valor);
			$comando = "$" . $nome_campo . '="$valor";';
			@eval($comando);	
		}	
		
	}




function data_mysql_para_user_com_data_tira_data($y){
	if ($y != ''){
			


		$hora_inverter = substr($y, 11,5);
		$data_inverter = substr($y, 0,10);
		$data_inverter = explode("-",$data_inverter);
		$x = $data_inverter[2].'/'. $data_inverter[1].'/'. $data_inverter[0];		

		
		

		return $x;
	}else{
		return '';
	}
}

function data_mysql_para_user($y,$tipo=0){
	if ($y != ''){
			
		if($tipo==0){
			
			$data_inverter = explode("-",$y);
			$x = $data_inverter[2].'/'. $data_inverter[1].'/'. $data_inverter[0];	

		} else {

			$hora_inverter = substr($y, 11,5);
			$data_inverter = substr($y, 0,10);
			$data_inverter = explode("-",$data_inverter);
			$x = $data_inverter[2].'/'. $data_inverter[1].'/'. $data_inverter[0].' às '.$hora_inverter.'h';		

		}	
		

		return $x;
	}else{
		return '';
	}
}


function data_user_para_mysql($y,$tipo=''){
	if ($y != ''){
		$data_inverter = explode("/",$y);
		$x = $data_inverter[2].'-'. $data_inverter[1].'-'. $data_inverter[0];
		return $x;
	}else{
		return '';
	}
}

function converte_data_de_ate($data,$tipo){
	$dt = explode(' até ',$data);
	if($tipo=='de'){return ($dt[0]);}
	if($tipo=='ate'){return ($dt[1]);}
}


function normaliza($str){
	
	$str = preg_replace('/[áàãâä]/ui', 'a', $str);
    $str = preg_replace('/[éèêë]/ui', 'e', $str);
    $str = preg_replace('/[íìîï]/ui', 'i', $str);
    $str = preg_replace('/[óòõôö]/ui', 'o', $str);
    $str = preg_replace('/[úùûü]/ui', 'u', $str);
    $str = preg_replace('/[ç]/ui', 'c', $str);
    $str = preg_replace('/[,(),;:|!"#$%&=?~^><ªº-]/', '-', $str);
    $str = preg_replace('/[^a-z0-9]/i', '-', $str);
    $str = preg_replace('/_+/', '-', $str); // ideia do Bacco :)
	$str = str_replace('<br>','', $str); // ideia do Bacco :)
	$str = strip_tags($str);
	$str = strtolower($str);
		
	return $str; //finaliza, gerando uma saída para a funcao
}
	

function menusProhall($menu_user,$menu){

	if (in_array($menu, $menu_user)){
		return 1;
	} else {
		return 0;
	}

}	


?>