<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname= "projeto";


//criando a conexão

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

$requestData= $_REQUEST;

$columns = array(
	0 =>'nome',
	1 => 'email',
);
?>
