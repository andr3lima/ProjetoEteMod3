<?php 
include 'menu.php';
?>

<div class="content-wrapper">

  <h3 class="text-primary mb-12">Nova atividade</h3>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  <script type='text/javascript' src='../js/cep.js'></script>

  <form  method="POST" action="../controller/add_atividade.php">
    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                  <form > 
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="Atividade"> Atividade </label>
                  <input type="text" class="form-control" name="atividade" id="atividade" required="" placeholder="Digite o nome da atividade">
                </div>

                <div class="form-group col-md-4">
              <label for="disciplina">disciplina</label>
              <select class="form-control" name="disciplina" id="disciplina">
               <option>Selecione...</option>
               <?php 
               include ("../controller/database.php");
          #seleciona os dados da tabela produto
               $IdUsuario = $_SESSION['usuarioId'];
               $sql=("SELECT * FROM disciplinas WHERE IDusuario = $IdUsuario and excluido = 0");
               $query = mysqli_query($conn,$sql);
               
               while($disciplina = mysqli_fetch_array($query)) { ?>
               <option value="<?php echo utf8_encode($disciplina['IDdisciplina']) ?>"><?php echo utf8_encode($disciplina['NomeDisciplina']) ?>
               </option>
               <?php } ?>
             </select>
           </div>

           <div class="form-group col-md-4">
            <label for="datasolicitacao">Data de entrega</label>
            <input type="date" class="form-control" name="data" id="data" placeholder="Auto preenchimento">
          </div>
              </div>
  <hr>

    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="cadastro_atividade.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>

</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php';?>