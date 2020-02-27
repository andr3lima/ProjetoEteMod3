<?php 
include 'menu.php'
?>

<div class="content-wrapper">
  <h3 class="text-primary mb-12">Cadastro de Disciplina</h3>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  <script type='text/javascript' src='../js/cep.js'></script>

  <div class="card">
    <div class="card-block">
      <form class="forms-sample" method="POST" action="../controller/add_disciplina.php">
          <div class="form-group">
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nome da Disciplina</label>
                    <input type="text" name="disciplina" class="form-control" id="exampleInputEmail1" placeholder="Digite a disciplina a ser cadastrada">
                </div>
                <div class="form-group col-md-6">
                  <label for="cer">Curso</label>
                  <input type="text" class="form-control" name="curso" id="curso" placeholder="Digite o curso associado a disciplina">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="numero">Turma</label>
                  <input type="text" class="form-control" name="turma" id="turma" placeholder="Digite sua turma">
                </div>

                <div class="form-group col-md-6">
                  <label for="rua">Professor</label>
                  <input type="text" class="form-control" name="professor" id="professor" placeholder="Digite o nome do professor da disciplina">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-2">
                  <label for="cer">Média para aprovação</label>
                  <input type="number" class="form-control" name="media" id="media" placeholder="Média da disciplina">
                </div>
                          
                <div class="form-group col-md-2">
                  <label for="rua">Quantidade de notas</label>
                  <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Digite a quantidade de notas">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                   <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <a href="template.html" class="btn btn-default">Cancelar</a>
                </div>
              </div>
            </div>
        </form>
      </div>
  </div>
    
</div>

<?php include 'footer.php'?>