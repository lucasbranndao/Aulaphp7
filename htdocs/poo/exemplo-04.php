<?php
// todo __ é metado magico 
class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){

			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
			
	}
	public function __destruct(){
		var_dump("Destruir");
	}

	public function __toString(){

		return $this->logradouro.", ".$this->numero." - ".$this->cidade;

	}

}

$meuEndereco = new Endereco("Rua Alta Ferrraz", "123", "Goiânia");

echo $meuEndereco;
echo "<br>";

var_dump($meuEndereco);
echo "<br>";


unset($meuEndereco);
?>