<?php 
session_start();
//coxexão
require_once 'db_conect.php';
if (isset($_POST['btn-editar'])) {
  $nome = mysqli_escape_string($conect, $_POST['nome']);
  $sobrenome = mysqli_escape_string($conect, $_POST['sobrenome']);
  $email = mysqli_escape_string($conect, $_POST['email']);
  $idade = mysqli_escape_string($conect, $_POST['idade']);
  $id = mysqli_escape_string($conect, $_POST['id']);

  $sql = "UPDATE clientes SET nome ='$nome', sobrenome ='$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

  if (mysqli_query($conect, $sql)) {
    header('Location: ../index.php?sucesso');
    $_SESSION['mensagem'] = "editado com sucesso";
  }else{
    header('Location: index.php? erro');
    $_SESSION['mensagem'] = "erro ao editar";
  }
}