<?php

include_once("database.php"); 

$IdUsuario = $_SESSION['usuarioId'];
$ID = $_GET['id'];
$sql = "SELECT * FROM notas WHERE excluido=0 and id = $ID";
$results= mysqli_query($conn, $sql);
while($row = $results->fetch_object()) {

	print '  <div class="row">
                <div class="form-group col-md-8">
                  <label for="disciplina">Descrição</label>
                  <input type="text" class="form-control" name="descricao" id="disciplina" value="'.$row->descricao.'"  required="">
                </div>

                 <div class="form-group col-md-4">
                  <label for="solicitante">Nota</label>
                  <input type="text" class="form-control" name="nota" value="'.$row->valor.'" id="Curso" required="" >
                </div>
                  
                  <input type="text" class="form-control" name="IDdisciplina" value="'.$row->IDdisciplina.'" id="Curso" required="" style="display: none;" >
                  <input type="text" class="form-control" name="IDnota" value="'.$ID.'" id="Curso" required="" style="display: none;" >
                
      </div>';

      
}
  ?>
