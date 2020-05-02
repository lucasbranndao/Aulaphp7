<?php
class Pessoa{
	// todo mundo vê
	public $nome = "Rasmus Lerdorf";
	// class pai e classes extendidas
	protected $idade = 48;
	// somente class pai
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}
}

class Programador extends Pessoa {
	public function verDados(){

		echo get_class($this) . "<br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}


}


$objeto = new Programador();
//echo $objeto->nome . "<br/>"
echo "<br>";

$objeto->verDados();

?>