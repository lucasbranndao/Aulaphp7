<?php
// prioridade da esquerda pra direita, prioridade tem valor, não pode ser null
function ola($texto = mundo, $periodo){
	return "Olá $texto, $periodo! <br>";

}

echo ola("", "Bom dia");
echo ola("Mundo", "Bom dia");
echo ola("Lucas", "Bom tarde");
echo ola("Brandão", "Bom Noite");


?>