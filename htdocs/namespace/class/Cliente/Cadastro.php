<?php
namespace Cliente;
/// cadastro do cliente e \cadastro da pasta raiz
class Cadastro extends \Cadastro {

	public function registraVenda(){

		echo "Foi registrada uma venda para o cliente " . $this->getnome();
	}

}

?>