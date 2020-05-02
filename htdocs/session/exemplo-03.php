<?php

require_once("config.php");
// limpa apenas sessão
session_unset($_SESSION[]);

echo$_SESSION['nome'];

// limpa total
session_destroy($_SESSION[]);

?>