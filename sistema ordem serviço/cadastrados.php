<?php
include_once 'INCLUDES\db_conect\db_conect.php';
 include_once 'INCLUDES\header.php';

?>
                      <div class="row">
                          <div class=" ">
                            <table class="responsive-table">
                              <thead>
                               <h3 class="light"> CADASTROS </h3>
                               <a href="cadastro.php" class="btn teste">Adicionar </a>
                               <tr>
                                  <th>Nome</th>
                                  <th>CPF</th>
                                  <th>Telefone</th>
                                  <th>Rua</th>
                                  <th>Numero</th>
                                  <th>Bairro</th>
                                  <th>Cidade</th>
                              </tr>

                          </thead>
                          <tbody>


                            <?php 



                            $sql = "SELECT * FROM clientes
                            INNER JOIN tb_endereco ON tb_endereco.id_endereco = clientes.cpf";
                            $resultado = mysqli_query($conect, $sql);

                            if (mysqli_num_rows($resultado) > 0) {
                    // code...



                              while ($dados = mysqli_fetch_array($resultado)):
                    // code...


                                ?>

                                <tr>
                                    <td><?php echo $dados['nome']; ?></td>
                                    <td><?php echo $dados['cpf']; ?></td>
                                    <td><?php echo $dados['telefone']; ?></td>
                                    <td><?php echo $dados['rua']; ?></td>
                                    <td><?php echo $dados['numero']; ?></td>
                                    <td><?php echo $dados['bairro']; ?></td>
                                    <td><?php echo $dados['cidade']; ?></td>
                                     <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="botao"> <i class="material-icons">edit</i></a></td>
                                    <td><a href="excluir.php?id=<?php echo $dados['cpf']; ?>" class="botao"><i class="material-icons">delete</i></a></t>
                            </tr>
                            <?php 
                        endwhile;

                    }else{
                      echo "<tr>
                      <td>-</td><br>
                      <td>-</td><br>
                      <td>-</td><br>
                      <td>-</td><br>
                      <td>-</td><br>
                      <td>-</td><br>
                      <td>-</td><br>

                      </tr>";
                  }
                  ?>

              </tbody>
          </table>
          <br>
          





        </div>
        </div>




<?php
  include_once 'INCLUDES\footer.php';
?>



