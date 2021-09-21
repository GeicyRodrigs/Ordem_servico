<?php
 include_once 'INCLUDES\db_conect\db_conect.php';
 include_once 'INCLUDES\header.php';

  if (isset($_GET['id'])) {
    $id_pessoa_fisica = mysqli_escape_string($conect, $_GET['id']);
  
    $sql = "SELECT * FROM clientes
            INNER JOIN tb_endereco ON tb_endereco.id_endereco = clientes.cpf";

    $resultado = mysqli_query($conect, $sql);
    $dados = mysqli_fetch_array($resultado);

  }
?>

<div class="row">
  <div class="col s12 m6 push-m3 ">

    <h4 class="light"> Editar Cliente <?php echo $dados['nome']; ?></h4>
    
    <form action="Atualizar.php?id=<?php echo $dados['cpf']; ?>" id="f" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" value="<?php echo $dados['nome'];?>">
        <label for="nome">Nome
          
        </label>
        
      </div>
      <div class="input-field col s12">
        <input type="text" name="cpf" value="<?php echo $dados['cpf'];?>">
        <label for="nome">CPF exemplo 999.999.999-99 
          
        </label>
        
      </div>
      <div class="input-field col s12">
        <input type="text" name="telefone" value="<?php echo $dados['telefone'];?>">
        <label for="nome">Telefone exemplo (33)99999-9999
          
        </label>
        
      </div>
      <div class="input-field col s12">
        <input type="text" name="rua" value="<?php echo $dados['rua'];?>">
        <label for="nome">Rua</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="numero" value="<?php echo $dados['numero'];?>">
        <label for="nome">Numero</label>
      </div>


       <div class="input-field col s12">
        <input type="text" name="bairro" value="<?php echo $dados['bairro'];?>">
        <label for="nome">Bairro</label>
      </div>

       <div class="input-field col s12">
        <input type="text" name="cidade" value="<?php echo $dados['cidade'];?>">
        <label for="nome">Cidade</label>
      </div>

      


      <div class="input-field col s12">
       
        <button type="submit" name="btn-editar"  class="btn">Atualizar</button>
        <a href="cadastrados.php" class="btn green">Lista de serviço</a>
        
        
      </div>
    </form>
    
    
    <tbody>
      
    </tbody>
    
  </div>
</div>
<style>
  .light{
    background: blue;
   color: white;

  
  text-align: center;
 
  
}

.striped{
  background:#F0F8FF ;
  height: 100%; width: 100%


  
}



</style>


<?php
  include_once 'INCLUDES\footer.php';
?>

