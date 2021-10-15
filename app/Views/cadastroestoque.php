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
            <h3 class="light">Novo produto</h3>
            <form  action="<?php echo base_url("estoque/inserirestoque") ?>" method="POST">
             <div class="input-field col s12">
                    <input type="text" name="nomeproduto" id="nomeproduto">
                  <label for="nomeproduto">Produto / Serviço</label>
             </div>
                <div class="input-field col s12">
                 <input type="text" name="quantidade" id="quantidade">
                    <label for="quantidade">Quantidade</label>
                </div>
                <div class="input-field col s12">
                    <input type="number" name="unidade" id="unidade">
                 <label for="unidade">Unidade</label>
              </div>
                <div class="input-field col s12">
                <input type="text" name="precocusto" id="precocusto">
                <label for="precocusto">Preço de custo</label>
            </div>
            <div class="input-field col s12">
                <input type="number" name="lucro" id="lucro">
                <label for="lucro">Lucro</label>
            </div>
            <div class="input-field col s12">
              <input type="text" name="precovenda" id=precovenda">
              <label for="precovenda">Preço de venda</label>
          </div>
            
            <!--<a href="clientes.html" class="btn green">Gravar</a>-->
            <button type="submit">Gravar</button>

            
        </form>
    </div>
</div>