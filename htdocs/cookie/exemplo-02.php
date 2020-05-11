<?php

if(isset($_COOKIE["NOME_DO+COOKIE"])) {

	$obj = json_decode($_COOKIE["NOME_DO+COOKIE"]);


	echo $obj->empresa;

}

?>