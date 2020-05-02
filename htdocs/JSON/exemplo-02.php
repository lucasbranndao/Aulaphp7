<?php

$json = '[{"nome":"jo\u00e3o","idade":20},{"nome":"ludmila","idade":19}]';

$data = json_decode($json, true);

var_dump($data);



?>