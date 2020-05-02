<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Lucas Brandão");
$cad->setEmail("lucas@brandão.com");
$cad->setSenha("123456");



$cad->registraVenda();
?>