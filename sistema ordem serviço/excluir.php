
<?php 
session_start();
//coxexão
include_once 'INCLUDES\db_conect\db_conect.php';

  $id = mysqli_escape_string($conect, $_GET['id']);
  $cpf = mysqli_escape_string($conect, $_POST['cpf']);
  $nome = mysqli_escape_string($conect, $_POST['nome']);
  $telefone = mysqli_escape_string($conect, $_POST['telefone']);
  $rua = mysqli_escape_string($conect, $_POST['rua']);
  $numero = mysqli_escape_string($conect, $_POST['numero']);
  $bairro = mysqli_escape_string($conect, $_POST['bairro']);
  $cidade = mysqli_escape_string($conect, $_POST['cidade']);


  $sql1 = " DELETE FROM `tb_endereco` WHERE id_endereco = '$id';";
  $sql2 = "DELETE FROM `clientes` WHERE id = '$id'";




  
  if (mysqli_query($conect, $sql1) && mysqli_query($conect, $sql2)) {
    header('Location:cadastrados.php?sucesso');
    $_SESSION['mensagem'] = "Deletado com sucesso";
  }else{
    header('Location: cadastrados.php? erro');
    $_SESSION['mensagem'] = "erro ao deletar";
  }
  



