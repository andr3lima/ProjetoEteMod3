<?php
                            include_once("database.php"); 
                            include_once("session.php");
                            $IdUsuario = $_SESSION['usuarioId'];
                            ?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title font-weight-normal text-primary">Atividades a entregar</h4>
                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>Atividade</th>
                                <th>Disciplina</th>
                                <th>Data de entrega</th>
                                <th>Prazo</th>
                            </tr>
                        </thead>
                        <tbody>
                    

                        <?php
                          
                            //MySqli Select Query
                            $sql = "SELECT a.NomeAtividade as Atividade, d.NomeDisciplina as Disciplina, a.DataEntrega as DataEntrega, a.IDatividade as idAtividade, a.concluido as concluido  FROM atividades as a inner join disciplinas as d on d.IDdisciplina = a.Disciplina  where a.excluido = 0 and a.IDusuario = $IdUsuario  and concluido = 0 ORDER BY a.DataEntrega";
                            $results= mysqli_query($conn, $sql);

                            while($row = $results->fetch_object()) {
                                print '<tr>';
                                print '<td>'.$row->Atividade.'</td>'; 
                                print '<td>'.$row->Disciplina.'</td>';
                                print '<td>'.$row->DataEntrega.'</td>';

                                $dataAtual = date('y-m-d');
                                $dataEntrega = $row->DataEntrega;

                                if(strtotime($dataAtual) > strtotime($dataEntrega)){
                                    print '<td class="actions">
                                        <label class="btn btn-danger btn-sm">Vencido</label>';
                                    print '</tr>';
                                }else if (strtotime($dataAtual) == strtotime($dataEntrega)){
                                    print '<td class="actions">
                                        <label class="btn btn-warning btn-sm">Vence hoje</label>';
                                    print '</tr>';
                                }else{
                                    print '<td class="actions">
                                        <label class="btn btn-success btn-sm">No prazo</label>';
                                    print '</tr>';
                                }
                            }  
                         
                        ?>
                        </tbody>	
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                   
<br>


<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title font-weight-normal text-primary">Disciplinas ativas</h4>
                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>Disciplina</th>
                                <th>Média atual</th>
                                <th>Situação atual</th>
                            </tr>
                        </thead>
                        <tbody>


                        <?php
                           
                           //MySqli Select Query
                           $sql = "SELECT * FROM disciplinas where excluido=0 and IDusuario = $IdUsuario  ORDER BY IDdisciplina";
                           
                           $results= mysqli_query($conn, $sql);

                           
                           while($row = $results->fetch_object()) {

                                $ID = $row->IDdisciplina;
                                $sqlNotas = "SELECT * FROM notas WHERE excluido =0 and IDdisciplina = $ID ";
                                $resultsNotas= mysqli_query($conn, $sqlNotas);
                                $rowNotas = $resultsNotas->fetch_object();

                                $count = "SELECT COUNT(id) as total FROM notas WHERE excluido = 0 and IDdisciplina = $ID ";
                                $resultsCount = mysqli_query($conn, $count);
                                $rowCount = $resultsCount->fetch_object();
                                $total = $rowCount->total;

                                $soma = "SELECT SUM(valor) as soma FROM notas WHERE excluido = 0 and IDdisciplina = $ID";
                                $resultsSoma = mysqli_query($conn, $soma);
                                $rowSoma = $resultsSoma->fetch_object();
                                $totalSoma = $rowSoma->soma;
                                
                                
                                if ($total != 0){
                                  $media = $totalSoma / $total;
                                  $mostrarMedia = number_format($media, 2, '.', ',');
                                
                                  $mediaAprov = $row->Media;
                                  
                                  if ($media > $mediaAprov){
                                    $situacao =  "Aprovado";
                                  }else{
                                      $situacao = "Reprovado";
                                  }
                                  
                                } else {
                                  $mostrarMedia = "N/A";
                                  $situacao =  "N/A";
                                }


                               print '<tr>';
                               print '<td>'.$row->NomeDisciplina.'</td>'; 
                               print '<td>'.$mostrarMedia.'</td>';
                               print '<td>'.$situacao.'</td>';
                           
                           }  
                           
                           // close connection
                           mysqli_close($conn);
                        ?>
                        </tbody>	
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                   



