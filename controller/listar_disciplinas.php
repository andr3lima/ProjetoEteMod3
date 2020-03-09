<?php

include_once("database.php"); 

$IdUsuario = $_SESSION['usuarioId'];
$ID = $_GET['id'];
$sql = "SELECT * FROM disciplinas WHERE excluido=0 and IDusuario=$IdUsuario and IDdisciplina = $ID";
$results= mysqli_query($conn, $sql);
while($row = $results->fetch_object()) {

	print '  <div class="row">
                <div class="form-group col-md-4">
                  <label for="disciplina">Disciplina</label>
                  <input type="text" class="form-control" name="disciplina" id="disciplina" value="'.$row->NomeDisciplina.'"  required="">
                </div>

                 <div class="form-group col-md-4">
                  <label for="solicitante">Curso</label>
                  <input type="text" class="form-control" name="Curso" value="'.$row->CursoUsuario.'" id="Curso" required="" >
                </div>
              
                <div class="form-group col-md-4">
                  <label for="cep">Turma</label>
                  <input type="text" class="form-control" name="Turma" id="Turma" value="'.$row->TurmaUsuario.'" required="">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-7">
                  <label for="rua">Professor</label>
                  <input type="text" class="form-control" name="Professor" id="Professor" value="'.$row->Professor.'">
                </div>
                <div class="form-group col-md-5">
                  <label for="numero">Média da disciplina</label>
                  <input type="text" class="form-control" name="Media" id="Media" value="'.$row->Media.'">
                </div>


              <div class="form-group col-md-6">
                <input type="number" name="IDdisciplina" value="'.$row->IDdisciplina.'" style="display: none;">
              </div>

      </div>';

      
}
  ?>
