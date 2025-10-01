<?php

class DB{
    private $link;

    public function __construct(){
	   $this->link = new mysqli(HOST, USER, PASSWORD, DBNAME);
		mysqli_set_charset($this->link,"utf8");
        if( mysqli_connect_errno() ){
            echo "FALHA: ", mysqli_connect_error();
            exit();
        }
	}

	public function __destruct(){
		mysqli_close( $this->link );
	}

	public function select($query){
		error_reporting(0);
		if(!$result = $this->link->query($query)){
			echo("<b>Erro MYSQL</b>:<br>" . mysqli_error($this->link)).'<br><br>'.$query;
		} else {
			return $result;
		}

	}


	public function rows($query){	
		return mysqli_num_rows($query);
	}

	public function exists(){
		return mysqli_affected_rows($this->link);
	}

	public function expand($query){
		return mysqli_fetch_array($query,MYSQLI_ASSOC);
	}	

	public function expand_all($query){
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	
	public function last_id($query){
		return mysqli_insert_id($this->link);
	}

	public function escape($var){
		$result = $this->link->real_escape_string($var);
		return $result;
	}

	public function list_all($query){
		return mysqli_fetch_all($query, MYSQLI_ASSOC);
	}

}


?>