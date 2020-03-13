<?php 
include ('menu.php');
include ('../controller/database.php');
$Porcen_estoque= 5;
$Porcen_emprestimo= 10;
$IdUsuario = $_SESSION['usuarioId'];

$sqlTotal = "SELECT COUNT(status) as total FROM atividades WHERE IDusuario = '$IdUsuario' and excluido = 0";
$sqlPrazo = "SELECT COUNT(status) as totalPrazo FROM atividades WHERE IDusuario = '$IdUsuario' and status = 4 and excluido = 0";
$sqlVenc = "SELECT COUNT(status) as totalVenc FROM atividades WHERE IDusuario = '$IdUsuario' and status = 5 and excluido = 0";

$resultsTotal = mysqli_query($conn, $sqlTotal);
$resultsPrazo = mysqli_query($conn, $sqlPrazo);
$resultsVenc = mysqli_query($conn, $sqlVenc);

$rowTotal = $resultsTotal->fetch_object();
$rowPrazo = $resultsPrazo->fetch_object();
$rowVenc = $resultsVenc->fetch_object();

$total = $rowTotal->total;
$totalPrazo = $rowPrazo->totalPrazo;
$totalVenc = $rowVenc->totalVenc;

$totalNR = $total - $totalPrazo - $totalVenc;

if ($totalPrazo == 0){
    $porcen_Prazo = 0;
} else{
    $porcen_Prazo = $totalPrazo / $total *100 ;
    $mostrarPrazo = number_format($porcen_Prazo, 2, '.', ',');

}

if ($totalVenc == 0){
    $porcen_Venc = 0;
} else{
    $porcen_Venc = $totalVenc / $total *100;
    $mostrarVenc = number_format($porcen_Venc, 2, '.', ',');
}

if ($totalNR == 0){
    $porcen_NR = 0;
} else{
    $porcen_NR = $totalNR / $total *100;
    $mostrarNR = number_format($porcen_NR, 2, '.', ',');
}


?>  
            
                <div class="content-wrapper">
                    <h3 class="text-primary mb-4">Dashboard</h3>
                    <h4 class="card-title font-weight-normal text-primary">Atividades Concluidas</h4>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title font-weight-normal text-success"> No prazo : <?php echo $totalPrazo; ?> </h5>
                                    <p class="card-text">atividades concluidas no prazo</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width:<?php echo $mostrarPrazo;?>%"  aria-valuemin="0"
                                            aria-valuemax="100"><?php echo $mostrarPrazo; ?> %
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-block">
                                <h5 class="card-title font-weight-normal text-danger"> Vencidas : <?php echo $totalVenc; ?></h5>
                                    <p class="card-text">atividades concluidas em atraso</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar bg-danger" role="progressbar" style="width: <?php echo $mostrarVenc; ?>%" aria-valuemin="0"
                                            aria-valuemax="100"><?php echo $mostrarVenc; ?>%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-block">
                                <h5 class="card-title font-weight-normal text-warning"> Não realizadas : <?php echo $totalNR; ?></h5>
                                    <p class="card-text">atividades a concluir</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar bg-warning" role="progressbar" style="width: <?php echo $mostrarNR; ?>%" aria-valuemin="0"
                                            aria-valuemax="100"><?php echo $mostrarNR; ?>%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                   
                    <?php include("../controller/visualizar_index.php"); ?> 
                        </div>
                    </div>
                </div>

                <?php include 'footer.php';?>