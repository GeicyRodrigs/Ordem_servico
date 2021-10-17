<!DOCTYPE html>
  <html>
    <head>
      <!--importando fonte-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--importando css do materialize-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


      <!--Otimizando para celular-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--Importando Java para carregamento otimizado-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
    
    <div class="row">
            <div class="col s12 m6 push-m3"> <!--Centralizando na página-->
            <h3 class="light">Nova ordem de serviço</h3>
            <form  action="<?php echo base_url("os/inseriros") ?>" method="POST">
             <div class="input-field col s12">
                    <input type="text" name="funcionario" id="funcionario">
                  <label for="funcionario">Funcionario</label>
             </div>
                <div class="input-field col s12">
                 <input type="text" name="cliente" id="cliente">
                    <label for="cliente">Cliente</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="objeto" id="objeto">
                 <label for="objeto">Objeto</label>
              </div>
                <div class="input-field col s12">
                <input type="text" name="solicita" id="solicita">
                <label for="solicita">Solicitação</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="produtoservico" id="produtoservico">
                <label for="produtoservico">Produto e Serviços</label>
            </div>

            <!--<a href="clientes.html" >Gravar</a>-->
            <button class="btn blue" type="submit">Gravar</button>

            
        </form>
    </div>
</div>