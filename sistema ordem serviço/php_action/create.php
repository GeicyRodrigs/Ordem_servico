<?php 
session_start();
//coxexão
require_once 'db_conect.php';
//Clear

function clear($input){
	global $conect;
	//sql
	$var = mysqli_escape_string($conect, $input);
	//xss
	$var = htmlspecialchars($var);
	return $var;

}

if (isset($_POST['btn-cadastrar'])) {
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$idade = clear($_POST['idade']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES('$nome', '$sobrenome', '$email', '$idade')";

	if (mysqli_query($conect, $sql)) {
		header('Location: ../index.php?sucesso');
		$_SESSION['mensagem'] = "cadastrado com sucesso";
	}else{
		header('Location: index.php? erro');
		$_SESSION['mensagem'] = "erro ao cadastrar";
	}
}