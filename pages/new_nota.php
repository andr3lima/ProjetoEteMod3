    <div class="row mb-12">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-block">
              <form class=" forms-sample" method="POST" action="../controller/add_nota.php">
                <div class = "row col-lg-12">
                  <div class="form-group col-md-7">
                    <label>Descrição</label>
                    <input type="text" name="descricao" class="form-control" id="descricao" placeholder='descrição da atividade'>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="cer">Nota</label>
                    <input type="text" class="form-control" name="nota" id="nota" placeholder="Digite a nota obtida">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" name="IDdisciplina" value="<?php echo"$IDdisciplina";?>" style="display: none;">
                  </div>
                </div>
              <div class="row col-lg-12">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>
              </form>
          </div>
        </div>
    </div>
</div>
</div>
</div>
