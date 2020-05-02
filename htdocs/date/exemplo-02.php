<?php

$ts = strtotime("2001-09-11");
$tsnow = strtotime("now");
$tsday = strtotime("+1 day");
$tsweek = strtotime("+1 week");


echo date("l, d/m/Y", $ts);
echo "<br>";
echo date("l, d/m/Y", $tsday);
echo "<br>";
echo date("l, d/m/Y", $tsweek);


?>