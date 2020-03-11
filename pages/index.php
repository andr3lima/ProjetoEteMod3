<?php 
include ('menu.php');
include ('../controller/database.php');
$Porcen_estoque= 5;
$Porcen_emprestimo= 10;


?>  
            
                <div class="content-wrapper">
                    <h3 class="text-primary mb-4">Dashboard</h3>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-success"> Atividades</h4>
                                    <p class="card-text">concluidas com antecedência</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:<?php echo number_format($Porcen_estoque) ?>%" aria-valuenow="<?php echo number_format($Porcen_estoque) ?>" aria-valuemin="0"
                                            aria-valuemax="100"><?php echo number_format($Porcen_estoque) ?> %
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-warning">215 Atividades</h4>
                                    <p class="card-text">concluidas no prazo</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-danger">89 atividades</h4>
                                    <p class="card-text">concluidas em atraso</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                            aria-valuemax="100">65%</div>
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