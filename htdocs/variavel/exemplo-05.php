<?php

$nome = "Brandão";
	
function teste() {
	global $nome;
	echo($nome);
}	


function teste2(){
	$nome = "Lindo";
	echo $nome. "agora no teste2";
}

teste();
teste2();

?>