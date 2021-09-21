<?php
 include_once 'INCLUDES\header.php';

?>
                    <div class="container-fluid">
                        <div class="card-body">
                            <h3 class="light"> CADASTRO PESSOA FISÍCA </h3>
                            <form action="recebendo_dados.php" id="f" method="POST">

                                 <div class="input-field">
                                     <input type="text" name="nome_pessoa">
                                     <label for="nome">Digite seu nome completo </label>   
                                </div>

      
                                <div class="input-field">
                                    <input type="text"  name="cpf_pessoa" size="16" maxlength="16">
                                    <label for="nome">Digite seu CPF exemplo 999.999.999-99 </label> 
                                </div>

                                <div class="input-field">
                                    <input type="text" name="telefone_pessoa">
                                    <label for="Numero de telefone">Digite seu telefone de contato exemplo (33)99999-9999</label>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="rua_pessoa">
                                    <label for="nome">Digite sua Rua  </label>
            
                                </div>
                                <div class="input-field">
                                    <input type="text" name="numero_pessoa">
                                    <label for="nome">Digite seu Numero  </label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="bairro_pessoa">
                                    <label for="nome">Digite seu Bairro  </label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="cidade_pessoa">
                                    <label for="nome">Digite sua Cidade  </label>
                                </div>

    
                                <br>
                                <button type="submit" name="btn_cadastrar_pessoa_fisica"  class="btn">Cadastrar</button>
                                <a href="cadastrados.php" class="btn green"> Lista ordem de servico</a>
    
                            </form>
                        </div>

                    </div>


<?php
  include_once 'INCLUDES\footer.php';
?>



