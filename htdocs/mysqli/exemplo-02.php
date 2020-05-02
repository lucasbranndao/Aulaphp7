<?php
// servidor (ip), usuario, senha e banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

	echo "Error: " . $conn->connect_error;

}

$result=$conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// exporta pra json
$data = array();
// forma direta
//while($row = $result->fetch_assoc()){
while($row = $result->fetch_array(MYSQLI_ASSOC)){

	array_push($data, $row);
	/*
	var_dump($row);
	*/


}

echo json_encode($data);

?>