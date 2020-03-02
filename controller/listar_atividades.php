<?php

include_once("database.php"); 

$IdUsuario = $_SESSION['usuarioId'];
$ID = $_GET['id'];

//MySqli Select Query
$sql = "SELECT * FROM atividades WHERE excluido=0 and IDusuario=$IdUsuario ";
$results= mysqli_query($conn, $sql);
while($row = $results->fetch_object()) {

	print '  <div class="row">
                <div class="form-group col-md-4">
                  <label for="atividade">Atividade</label>
                  <input type="text" class="form-control" name="atividade" id="atividade" value="'.$row->NomeAtividade.'"  required="">
                </div>
                  
                <div class="form-group col-md-4">
              <label for="disciplina">disciplina</label>
              <select class="form-control" name="disciplina" id="disciplina">
               <option>Selecione...</option>
               <?php 
               $busca=("SELECT * FROM disciplinas WHERE IDusuario = $IdUsuario and excluido = 0");
               $action = mysqli_query($conn,$busca);
               
               while($disciplina = mysqli_fetch_array($action)) { ?>
               <option value="<?php echo utf8_encode($disciplina['IDdisciplina']) ?>"><?php echo utf8_encode($disciplina['NomeDisciplina']) ?>
               </option>
               <?php } ?>
             </select>
           </div>
              
                <div class="form-group col-md-4">
                  <label for="DataEntrega">Data de entrega</label>
                  <input type="text" class="form-control" name="DataEntrega" id="DataEntrega" value="'.$row->DataEntrega.'" required="">
                </div>
            </div>

              <div class="form-group col-md-6">
                <input type="number" name="IDatividade" value="'.$row->IDatividade.'" style="display: none;">
              </div>

      </div>';
}
  ?>
