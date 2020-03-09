<?php

include_once("database.php"); 

$dataAtual = date('d/m/y');
$IdUsuario = $_SESSION['usuarioId'];
$ID = $_GET['id'];
$sql = "SELECT * FROM disciplinas WHERE excluido=0 and IDusuario=$IdUsuario and IDdisciplina = $ID";
$results= mysqli_query($conn, $sql);

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
      </div>
      
      <div class="table-responsive col-md-12">
      <table class="table table-striped" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th>Média atual</th>
          <th>Notas Registradas</th>
          <th>Situação</th>
          <th class="actions">Ações</th>
        </tr>
      </thead>
      <tbody>

        <!-- # lista dos itens -->
       <?php include("../controller/visualizar_disciplinas.php"); ?>
        
      </tbody>	
    </table>
    </div>

    <form>
    <div class =" row justify-content-center"
      <div class="col-md-12">
        <button type="submit" class="btn btn-success">Nova nota</button>
      </div>
    </div>
    </form>
      ';
      
}
  ?>
