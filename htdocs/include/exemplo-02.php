<?php
// tenta funcionar mesmo que o arquivo não exista ou esteja com problema, + 	recursos

//include "exemplo-01.php";


// obriga que exista ou esteja funcionando corretamente, - recursos
require "exemplo-01.php";

// se ja chamou ele ignora e não chama de novo
// 	require_once

$resultado = somar(10, 20);

echo "$resultado";

?>