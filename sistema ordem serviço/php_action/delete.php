<?php 
session_start();
//coxexão
require_once 'db_conect.php';
if (isset($_POST['btn-deletar'])) {
  
  $id = mysqli_escape_string($conect, $_POST['id']);

  $sql = "DELETE  FROM clientes WHERE id='$id'";

  if (mysqli_query($conect, $sql)) {
    header('Location: ../index.php?sucesso');
    $_SESSION['mensagem'] = "Deletado com sucesso";
  }else{
    header('Location: index.php? erro');
    $_SESSION['mensagem'] = "erro ao deletar";
  }
}