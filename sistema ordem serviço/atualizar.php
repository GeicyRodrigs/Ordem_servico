<?php 
session_start();
//coxexão
include_once 'INCLUDES\db_conect\db_conect.php';

if (isset($_POST['btn-editar'])) {
  $id = mysqli_escape_string($conect, $_GET['id']);
  $cpf = mysqli_escape_string($conect, $_POST['cpf']);
  $nome = mysqli_escape_string($conect, $_POST['nome']);
  $telefone = mysqli_escape_string($conect, $_POST['telefone']);
  $rua = mysqli_escape_string($conect, $_POST['rua']);
  $numero = mysqli_escape_string($conect, $_POST['numero']);
  $bairro = mysqli_escape_string($conect, $_POST['bairro']);
  $cidade = mysqli_escape_string($conect, $_POST['cidade']);
  
  $sql = "UPDATE `clientes` SET `cpf`='$cpf',`nome`='$nome',`endereco`='$cpf',`telefone`='$telefone' WHERE cpf = '$id';";

  $sql2 = " UPDATE `tb_endereco` SET `id_endereco`='$cpf',`rua`='$rua',`numero`='$numero',`bairro`='$bairro',`cidade`='$cidade' WHERE id_endereco = '$id'";
  
  if (mysqli_query($conect, $sql) && mysqli_query($conect, $sql2)) {
    header('Location: cadastrados.php?sucesso');
    $_SESSION['mensagem'] = "editado com sucesso";
  }else{
   header('Location: cadastrados.php? erro');
    $_SESSION['mensagem'] = "erro ao editar";
  }
  
}