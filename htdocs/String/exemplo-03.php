<?php

$empresa = "Hcode";
// troca letras por numeros ou vice-versa (letra, vai ser troca por, qual variavel)
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo($empresa);

$empresa = str_replace("0", "o", $empresa);
echo "<br>";
echo($empresa);


?>