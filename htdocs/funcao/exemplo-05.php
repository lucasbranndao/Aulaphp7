<?php
$a = 10;
$c = 20;
// o que acontece na função fica na função!!!!! 
function trocaValor(&$b){

	$b += 50;
	return $b;


}
echo trocaValor($a);
echo "<br>";
echo trocaValor($b);
echo "<br>";
echo $a;
?>