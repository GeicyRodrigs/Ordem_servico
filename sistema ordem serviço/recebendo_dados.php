<?php 
session_start();
//coxexão
require_once 'INCLUDES\db_conect\db_conect.php';
//Clear



if (isset($_POST['btn_cadastrar_pessoa_fisica'])) {
  
  $nome_pessoa = $_POST['nome_pessoa'];
  $cpf_pessoa = $_POST['cpf_pessoa'];
  $telefone_pessoa = $_POST['telefone_pessoa'];
  
  $rua_pessoa = $_POST['rua_pessoa'];
  $numero_pessoa = $_POST['numero_pessoa'];
  $bairro_pessoa = $_POST['bairro_pessoa'];
  $cidade_pessoa = $_POST['cidade_pessoa'];
  

// inserindo dados Pessoa fisica CONTATOS
 $sql = "INSERT INTO `clientes`(`cpf`, `nome`, `endereco`, `telefone`) VALUES ('$cpf_pessoa','$nome_pessoa','$cpf_pessoa','$telefone_pessoa')";

 mysqli_query($conect, $sql);


 $sql ="INSERT INTO `tb_endereco`(`id_endereco`, `rua`, `numero`, `bairro`, `cidade`) VALUES ('$cpf_pessoa','$rua_pessoa','$numero_pessoa','$bairro_pessoa','$cidade_pessoa')";

 

  if (mysqli_query($conect, $sql)) {
    header('Location:cadastrados.php?sucesso');
    $_SESSION['mensagem'] = "cadastrado com sucesso";
  }else{
    header('Location:cadastrados.php? erro');
    $_SESSION['mensagem'] = "erro ao cadastrar";
  }

 
}


 




