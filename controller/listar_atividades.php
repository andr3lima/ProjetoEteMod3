<?php

include_once("database.php"); 

$IdUsuario = $_SESSION['usuarioId'];
$ID = $_GET['id'];

//MySqli Select Query
$sql = "SELECT a.NomeAtividade as Atividade, d.IDdisciplina as IDdisciplina, d.NomeDisciplina as Disciplina, a.DataEntrega as DataEntrega, a.IDatividade as idAtividade  FROM atividades as a inner join disciplinas as d on d.IDdisciplina = a.Disciplina  where a.excluido = 0 and a.IDusuario = $IdUsuario and a.IDatividade = $ID" ;
$results= mysqli_query($conn, $sql);
$row = $results->fetch_object();


print'<div class="row">
<div class="form-group col-md-4">
<label for="atividade">Atividade</label>
<input type="text" class="form-control" name="atividade" id="atividade" value="'.$row->Atividade.'" >
</div>
                  
<div class="form-group col-md-4">
<label for="disciplina">disciplina</label>
 <select class="form-control" name="disciplina" id="disciplina">';

 $sql=("SELECT * FROM disciplinas WHERE IDusuario = $IdUsuario and excluido = 0");
 $query = mysqli_query($conn,$sql);
 
 while($disciplina = mysqli_fetch_array($query)) { ?>
  <option value="<?php echo utf8_encode($disciplina['IDdisciplina']) ?>" <?php if ($disciplina['NomeDisciplina'] == $row->Disciplina ) { echo "selected";} ?> ><?php echo utf8_encode($disciplina['NomeDisciplina']) ?>
  </option>
<?php

 }
            print'</select>
           </div>';

                print'<div class="form-group col-md-4">
                  <label for="DataEntrega">Data de entrega</label>
                  <input type="text" class="form-control" name="DataEntrega" id="DataEntrega" value="'.$row->DataEntrega.'">
                </div>
            </div>

            <div class="form-group col-md-6">
            <input type="number" name="IDatividade" value="'.$row->idAtividade.'" style="display: none;">
          </div>';
               ?>