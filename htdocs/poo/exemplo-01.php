<?php 

class Pessoa {
	/// atributo
	public $nome;
//public vê por fora	// metodo
	public function falar(){
		return " O meu nome é ".$this->nome;
	}

}

$glaucio = new Pessoa();
$glaucio ->nome = "Glaucio Daniel";
echo $glaucio->falar();
?>