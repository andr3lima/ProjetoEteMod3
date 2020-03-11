<?php
$IdUsuario = $_SESSION['usuarioId'];
$sql = "SELECT * FROM disciplinas WHERE excluido=0 and IDusuario=$IdUsuario and IDdisciplina = $ID";
$results= mysqli_query($conn, $sql);

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
  if ($media >= $mediaAprov){
    $situacao =  "Acima da média";
  } else{
    $situacao =  "Abaixo da média";
  }
  
} else {
  $mostrarMedia = "N/A";
  $situacao =  "N/A";
}





while($row = $results->fetch_object()) {

	print '  <div class="row">
                <div class="form-group col-md-3">
                  <label>Curso:  '.$row->CursoUsuario.'</label>
                </div>

                <div class="form-group col-md-3">
                  <label>Turma:  '.$row->TurmaUsuario.'</label>
                </div>

                <div class="form-group col-md-3">
                  <label>Professor:  '.$row->Professor.'</label>
                </div>

                <div class="form-group col-md-3">
                  <label>Media para aprovação:  '.$row->Media.'</label>
                </div>
            </div>
              <div class="form-group col-md-6">
                <input type="number" name="IDdisciplina" value="'.$row->IDdisciplina.'" style="display: none;">
              </div>

      <div class="row justify-content-center">
      <div class="form-group col-md-3">
        <b><label>Notas registradas:  '.$total.'</label></b>
      </div>

        <div class="form-group col-md-3">
          <b><label>Média Atual:  '.$mostrarMedia.'</label></b>
        </div>

        <div class="form-group col-md-3">
          <b><label>Situação atual:  '.$situacao.'</label></b>
        </div>
      </div>
      
      </div>

      <div class="row justify-content-center">

      <div class="table-responsive col-md-11">
      <table class="table table-striped" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th></th>
          <th>Descrição</th>
          <th>Nota Registrada</th>
          <th class="actions">Ações</th>
        </tr>
      </thead>
      <tbody>';
       include("../controller/visualizar_notas.php");
       print'
        
      </tbody>	
    </table>
    </div>
      
      </div>

      
    <div class =" row justify-content-center">

      ';      
}
  ?>
