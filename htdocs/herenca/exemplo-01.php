<?php
// class primaria
class Documentos{
	private $numero;
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){

		$this->numero = $numero;
	}
}
// Class segundaria 
class CPF extends Documentos{

	public function validar():bool{
		
		$numeroCPF = $this ->getNumero();

		return true;
	}
}

$doc = new CPF();

$doc->setNumero("12345678910");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();


?>