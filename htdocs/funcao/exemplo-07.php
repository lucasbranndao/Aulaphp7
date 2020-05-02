<?php
function soma(int ...$valores) {

	return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";

echo soma(25, 33);
echo "<br>";

// ignora depois do ponto
echo soma(1.5, 3.2);
echo "<br>";


?>

