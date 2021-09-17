<?php
session_start();
if (isset($_SESSION['mensagem'])) {?>
  <script>  
    window.onload = function() {
      M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
    };
  </script>

  <?php
}
session_unset();
  include_once 'php_action\db_conect.php';
  include_once 'INCLUDES\header.php';
  
?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Ordem de Serviço</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Sistema de Gerenciamento</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Andamento</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver mais</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Pendentes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver mais</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Finalizadas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver mais</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Canceladas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Mais</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Data Entrada</th>
                                            <th>Data Finalização</th>
                                            <th>Nº OS</th>
                                            <th>Cliente</th>
                                            <th>Objeto</th>
                                            <th>Defeito</th>
                                            <th>Produtos/Serviços</th>
                                            <th>Valor Total</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>ddfff</td>
                                            <td>10/10/2021</td>
                                            <td>15/10/2021</td>
                                            <td>0001</td>
                                            <td>ffggghshshdhhdhdhdwjddd</td>
                                            <td>celular</td>
                                            <td>djdkfjksdfjf</td>
                                            <td>sdklskflfk</td>
                                            <td>R$ 50,00</td>


                                            
                                        </tr>

                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



<?php
  include_once 'INCLUDES\footer.php';
?>



