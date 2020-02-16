<?php 
include ('menu.php');
include ('../controller/database.php');

$queryt = ("SELECT COUNT(*) FROM pecas WHERE excluido=0");
$rs = mysqli_query($conn,$queryt);
$result0 = mysqli_fetch_array($rs);

#PECAS DISPONIVEIS NO ESTOQUE.
$sql = ("SELECT COUNT(*) FROM pecas WHERE excluido=0 AND emprestimo=0");
$rs = mysqli_query($conn,$sql);
$result1 = mysqli_fetch_array($rs);
# PECAS EMPRESTADAS
$query = ("SELECT COUNT(*) FROM pecas WHERE excluido=0 AND emprestimo=1");
$rs = mysqli_query($conn,$query);
$result2 = mysqli_fetch_array($rs);

$Porcen_estoque= ($result1[0] * 100) / $result0[0];
$Porcen_emprestimo= ($result2[0] * 100) / $result0[0];


?>  
                
                <div class="content-wrapper">
                    <h3 class="text-primary mb-4">Dashboard</h3>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-success"><?php echo $result1[0] ?></h4>
                                    <p class="card-text">Peças Cadastradas</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:<?php echo number_format($Porcen_estoque) ?>%" aria-valuenow="<?php echo number_format($Porcen_estoque) ?>" aria-valuemin="0"
                                            aria-valuemax="100"><?php echo number_format($Porcen_estoque) ?> %</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-info"><?php echo $result2[0] ?></h4>
                                    <p class="card-text ">Peças Emprestadas</p>
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width:<?php echo number_format($Porcen_emprestimo) ?>%" aria-valuenow="<?php echo number_format($Porcen_emprestimo) ?>" aria-valuemin="0"
                                            aria-valuemax="100"><?php echo number_format($Porcen_emprestimo)?>%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-warning">2156</h4>
                                    <p class="card-text">Orders</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title font-weight-normal text-danger">$ 89623</h4>
                                    <p class="card-text">Revenue</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                            aria-valuemax="100">65%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6  mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Sales</h5>
                                    <canvas id="lineChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Total de Peças</h5>
                                    <canvas id="doughnutChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Payments</h5>
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th><i class="fa fa-user ml-2"></i></th>
                                                <th>User</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th><img src="../images/profile.jpg" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="../images/profile.jpg" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-danger">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="../images/profile.jpg" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-primary">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="../images/profile.jpg" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="../images/profile.jpg" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-danger">Failed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <div id="map" style="min-height:415px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'footer.php';?>