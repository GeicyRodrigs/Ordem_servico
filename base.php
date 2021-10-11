<?php

$servername = "Localhost";
$username = "root";
$password = "";
$db_name = "sistemaos";

$conexao = new mysqli($servername, $username, $password, $db_name);

if($conexao->connect_errno){

    echo "Erro";
}

else{
    echo "Conexão efetuada com sucesso";
}

?>