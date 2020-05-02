<?php
// Comentario: linha ou  /* em bloco/* 
/*$anoNascimento = 1991;*/
$nomeCompleto = "Lucas Brandão";
// Na linha de baixo temos uma variável com número no nome
$nome1 = "Arthur";
$sobrenome = "Brandão";


	echo $nome1;
	echo "<br/>";
//unset($nome1);

$nomeCompleto = $nome1." ".$sobrenome;
	echo($nomeCompleto);

if (isset($nome1)) {
	echo($nome1);
}
?>