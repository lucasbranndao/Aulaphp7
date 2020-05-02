<?php

function soma(float ...$valores):string {

	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";

echo soma(25, 33);
echo "<br>";

// por causa do float soma depois do ponto apesar de definir string no final
echo soma(1.5, 3.2);
echo "<br>";


?>

