<?php
$total = 150;
$deconto = 0.9;

do{

	$total *= $deconto;

}
while ($total > 100);
	

echo $total;


?>