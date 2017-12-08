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
//var $host		=	"www.secundariatec16.000webhostapp.com";
//var $username	=	"id3866439_root";
//var $passUser	=	"laison";
//var $database	=	"id3866439_secundaria";
//$conexion1=mysqli_connect($host, $username, $passUser, $database);
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