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
            <h3 class="light">Novo Cliente</h3>
            <form  action="<?php echo base_url("Home/inserircli") ?>" method="POST">
             <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                  <label for="nome">Nome Completo</label>
             </div>
                <div class="input-field col s12">
                 <input type="text" name="cpfcnpj" id="cpfcnpj">
                    <label for="cpfcnpj">CPFCNPJ</label>
                </div>
                <div class="input-field col s12">
                    <input type="number" name="CEP" id="CEP">
                 <label for="nome">CEP</label>
              </div>
                <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="nome">Endereco</label>
            </div>
            <div class="input-field col s12">
                <input type="number" name="num" id="num">
                <label for="nome">Nº</label>
            </div>
            <div class="input-field col s12">
              <input type="text" name="bairro" id="bairro">
              <label for="nome">Bairro</label>
          </div>
            <div class="input-field col s12">
                <input type="number" name="telefone" id="telefone">
                <label for="nome">Telefone</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="nome">Email</label>
            </div>
            
            <button class="btn blue" type="submit">Gravar</button>

            
        </form>
    </div>
</div>