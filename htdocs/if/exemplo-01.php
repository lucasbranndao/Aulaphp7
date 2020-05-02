<?php
/*if (condição a testar){

	se verdadeira executa esse bloco
}

*/
$qualASuaIdade = 18;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "É uma criança";
} 
//else{ echo "Não é uma criança";}
elseif ($qualASuaIdade < $idadeMaior) {
	echo "É adolecente";
}
elseif ($qualASuaIdade < $idadeMelhor){
	echo "É um adulto";
}
else{ echo "É um idoso";}



echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade": "Maior de idade";

?>