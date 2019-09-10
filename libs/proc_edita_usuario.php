<?php
//inicia a sessão
session_start();
//inclui e avalia o arquivo informado durante a execução do script, se o arquivo ja foi incluido nao fará novamente
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT); //obtem uma variavel especifica externa através do nome e opcionalmente filtra
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE usuarios SET nome='$nome', email='$email', modificado=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario); // executa uma consulta no banco de dados

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: ../paginas/listar.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: ../paginas/edit_usuario.php?id=$id");
}
