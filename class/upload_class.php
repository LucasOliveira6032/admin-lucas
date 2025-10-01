<?php

class UploadArquivoSis{
    
 
    public function Upload($caminho='',$nome_campo='', $extensoes = '', $array_fotos=''){
		

		if($array_fotos!==''){  
		
            //$array_fotos = ($array_fotos-1);
            $arquivo_upload = $_FILES["$nome_campo"]["name"][$array_fotos];
            $tamanho_arquivo_upload = $_FILES["$nome_campo"]["size"][$array_fotos];
            $temp_arquivo_upload = $_FILES["$nome_campo"]["tmp_name"][$array_fotos];
            $type_arquivo_upload = $_FILES["$nome_campo"]["type"][$array_fotos];    
        } else {       
    
            $arquivo_upload = $_FILES["$nome_campo"]["name"];
            $tamanho_arquivo_upload = $_FILES["$nome_campo"]["size"];
            $temp_arquivo_upload = $_FILES["$nome_campo"]["tmp_name"];
            $type_arquivo_upload = $_FILES["$nome_campo"]["type"];    
        }


		//RECEBE ARQUIVO//
    	if(!empty($arquivo_upload)){

    		//ACERTA O NOME DO ARQUIVO REMOVENDO ESPAÇOS E ACENTOS E COLOCA UM UNIQID ANTES DO NOME
    		$novo_nome_arquivo = $this->RenomeiaArquivo($arquivo_upload);	
    		
			
    		//CASO HAJA RESTRICAO DE TIPOS DE ARQUIVOS
    		if($extensoes!=''){
								
    			$restricao = $this->RestricaoArquivo($arquivo_upload,$extensoes);	
				
    			if($restricao==1){
    				$_SESSION['avisos-class'] = 'error';				
                    $_SESSION['avisos-msg'] ='Erro: Tipo de arquivo não permitido.';    				
    				return '';
					//exit;				
    			} 
    		
    		}
    		/////////////////////////////////////////////////////////////////////////////



    		//CASO NÃO APRESENTE NENHUM ERRO - FAZ O UPLOAD E RETORNA O NOME DO ARQUIVO
    		move_uploaded_file($temp_arquivo_upload, ($caminho.'/'.$novo_nome_arquivo));
    		return $novo_nome_arquivo;


    	}

		
	}



	
	

	public function RenomeiaArquivo($var){		
		//$str = preg_replace('/[^a-z0-9.]/i', '', $var);
		//$str = strtolower($str);		
		$tmp = explode('.', $var);
		$str = strtolower(end($tmp));
		$novo_nome	= 	$this->arruma_nome($var);
		$novo_nome = uniqid().$novo_nome.'.'.$str;
		return $novo_nome;
	}

	public function arruma_nome($str){

		$tmp = explode('.', $str);
		$tmp = strtolower(end($tmp));
		$str = str_replace($tmp,'', $str); // ideia do Bacco :)
		
		$str = str_replace('.','', $str); // ideia do Bacco :)
		$str = str_replace(' ','', $str); // ideia do Bacco :)
		$str = preg_replace('/[áàãâä]/ui', 'a', $str);
		$str = preg_replace('/[éèêë]/ui', 'e', $str);
		$str = preg_replace('/[íìîï]/ui', 'i', $str);
		$str = preg_replace('/[óòõôö]/ui', 'o', $str);
		$str = preg_replace('/[úùûü]/ui', 'u', $str);
		$str = preg_replace('/[ç]/ui', 'c', $str);
		$str = preg_replace('/[,(),;:|!"#$%&=?~^><ªº-]/', '-', $str);
		$str = preg_replace('/[^a-z0-9]/i', '_', $str);
		//str = preg_replace('/_+/', '', $str); // ideia do Bacco :)

		$str = strip_tags($str);
		$str = strtolower($str);
			
		return $str; //finaliza, gerando uma saída para a funcao
	}

	public function TamanhoArquivo($var,$tamanho){				
		
		if($tamanho != ''){
			$limite = ($tamanho*1048576);
			$aux = 1;
		}else{
			$aux = 0;
			$limite = ($this->tamanho_maximo*1000000);		
		}
		
		if($var>$limite && $aux == 1){
			return 0;
		} else {
			return 1;
		}
		
	}


	public function RestricaoArquivo($var,$extensoes){		

		//$array_temp = array($extensoes);
		
		//PEGA A EXTENSÃO DO ARQUIVO
		$tmp = explode('.', $var);
		$extensao_arquivo = strtolower(end($tmp));

		//if(in_array($extensao_arquivo, $array_temp)){ 
		if($extensao_arquivo!=$extensoes){	
			return 1;
		} else {
			return 0;
		}

	}	






	public function UploadArray($caminho='',$nome_campo='',$index_array = '',$array_permitidos=''){

        $arquivo_upload = $_FILES["$nome_campo"]["name"][$index_array];
        $tamanho_arquivo_upload = $_FILES["$nome_campo"]["size"][$index_array];
        $temp_arquivo_upload = $_FILES["$nome_campo"]["tmp_name"][$index_array];
        $type_arquivo_upload = $_FILES["$nome_campo"]["type"][$index_array];    

				//RECEBE ARQUIVO//
				if(!empty($arquivo_upload)){

					//ACERTA O NOME DO ARQUIVO REMOVENDO ESPAÇOS E ACENTOS E COLOCA UM UNIQID ANTES DO NOME    	
		
					$novo_nome_arquivo = $this->RenomeiaArquivo($arquivo_upload);   

					if(!empty($array_permitidos)){
						
						$permissao = $this->RestricaoArquivo($novo_nome_arquivo,$array_permitidos);	

						if($permissao==0){
							$_SESSION['aviso-type'] = '';
					        $_SESSION['aviso-message'] ='Erro, ';
							return '';
						} 
					
					}
		

					//CASO NÃO APRESENTE NENHUM ERRO - FAZ O UPLOAD E RETORNA O NOME DO ARQUIVO
					move_uploaded_file($temp_arquivo_upload, ($caminho.'/'.$novo_nome_arquivo));
					return $novo_nome_arquivo;
		
				}
		

	}

}


?>