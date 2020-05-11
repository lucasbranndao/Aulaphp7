<?php

$frase = "a repetição e a mae da retenção";

$palavra = "mae";

// procura dentro do texto quantos caracter ate a uma palavra ou variavel palvras chaves
$q = strpos($frase, "mae");


// mostra o texto select no intervalo( variavel do texto, posição de star, variavel final)
$texto = substr($frase, 0, $q);

//começa a busca na variavel FRASE apartir de Q+PALAVRA e mostra o restante de FRASE
// (variavel do texto, variavel da busca + variavel da palavra encontrada + resto da frase)

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

?>