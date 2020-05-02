<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'joão', 'idade'=>20

));
array_push($pessoas, array(
	'nome'=>'ludmila', 'idade'=>19
));

echo json_encode($pessoas);

?>