<?php
//conexão com o banco de dados 

$servername = "localhost";
$userword ="root";
$password="";
$db_name = "Crud";

$conect = mysqli_connect($servername, $userword, $password,$db_name);

if (mysqli_connect_error()) {
	echo "Falha ao acessar o Banco de dados.".mysqli_connect_error();
}