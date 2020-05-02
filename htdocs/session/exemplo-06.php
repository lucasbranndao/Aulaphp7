<?php
require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());
echo "<br>";

switch (session_status()) {

	case PHP_SESSION_DISABLED:
	echo "as sessões ativerem desabilitadas";
	break;

	case PHP_SESSION_NONE:
	echo "as sessões habilitadas, mas nenhuma existir";
	break;

	case PHP_SESSION_ACTIVE:
	echo "as sessões ativerem habilitadades, e um existir";
	break;
}


?>