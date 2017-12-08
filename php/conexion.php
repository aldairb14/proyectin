<?php

/**

* 
*/
 $host		=	"localhost";
 $username	=	"root";
 $passUser	=	"";
$database	=	"secundaria";
$conexion1=mysqli_connect($host, $username, $passUser, $database);
class ConectarDB{


var $host		=	"localhost";
var $username	=	"root";
var $passUser	=	"";
var $database	=	"secundaria";

var $connection;

public function conectar(){
	$this->connection = mysqli_connect($this->host, $this->username, $this->passUser, $this->database);

	if(!$this->connection){
		return FALSE;
	}
	else{
		return $this->connection;
	}

}

public function establecerUserPass($username, $passUser){
	$this->username = $username;
	$this->passUser = $passUser;
}


}

?>
