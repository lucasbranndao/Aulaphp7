<?php

class Animal{

	public function falar(){


		return "Som";

	}
	 public function mover(){

	 	return "Andar";

	 }

}

class Cachorro extends Animal{

	public function falar(){

		return "Late";

	}

}

class Gato extends Animal{

	public function falar(){
		return "Mia";
	}
}
class Passaro extends Animal{

	public function falar(){

		return "Canta";
	}

	public function mover(){

		return "Voa e ". parent::mover();
	}
}



echo "Cachorro: <br/>";
$pluto = new Cachorro();
echo $pluto->falar()."<br/>";
echo $pluto->mover()."<br/>";

echo "------------------------------<br/>";

echo "Gato: <br/>";
$garfield = new Gato();
echo $garfield->falar()."<br/>";
echo $garfield->mover()."<br/>";

echo "------------------------------<br/>";

echo "Passaro: <br/>";
$picapau = new Passaro();
echo $picapau->falar()."<br/>";
echo $picapau->mover()."<br/>";





?>