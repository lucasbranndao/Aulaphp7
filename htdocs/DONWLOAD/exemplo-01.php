<?php

$link = "https://www.letramento.com.br/silabas/silabas-ba-be-bi-bo-bu.gif";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">