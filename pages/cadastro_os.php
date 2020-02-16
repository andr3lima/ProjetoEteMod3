<?php 
include 'menu.php';
?>

<div class="content-wrapper">

  <h3 class="text-primary mb-12">Ordem de Serviço</h3>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  <script type='text/javascript' src='../js/cep.js'></script>

  <form  method="POST" action="../controller/add_os.php" enctype="multipart/form-data">
    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                  <form > 
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="orgao">Orgão</label>
                  <input type="text" class="form-control" name="orgao" id="orgao" required="" placeholder="Digite o orgao">
                </div>

                 <div class="form-group col-md-6">
                  <label for="solicitante">Nome do Solicitante</label>
                  <input type="text" class="form-control" name="solicitante" id="solicitante" required="" placeholder="Digite o orgao">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" name="cep" id="cep" required="" placeholder="Digite o CEP">
                </div>

                <div class="form-group col-md-6">
                  <label for="rua">Rua</label>
                  <input type="text" class="form-control" name="rua" id="rua" placeholder="Auto preenchimento">
                </div>
                <div class="form-group col-md-3">
                  <label for="numero">Número</label>
                  <input type="text" class="form-control" name="numero" id="numero" placeholder="Auto preenchimento">
                </div>
              </div>

              <div class="row"> 
               <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Auto preenchimento">
              </div>
              <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Auto preenchimento">
              </div>
              <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Auto preenchimento">
              </div>
            </div>

            <div class="row"> 
             <div class="form-group col-md-4">
              <label for="tipo">Técnico</label>
              <select class="form-control" name="tecnico" id="tecnico">
               <option>Selecione...</option>
               <?php 
               include ("../controller/database.php");
          #seleciona os dados da tabela produto
               $sql=("SELECT usuario FROM usuarios");
               $query = mysqli_query($conn,$sql);
               while($prod = mysqli_fetch_array($query)) { ?>
               <option value="<?php echo utf8_encode($prod['usuario']) ?>"><?php echo utf8_encode($prod['usuario']) ?>
               </option>
               <?php } ?>
             </select>
           </div>

           <div class="form-group col-md-4">
            <label for="datasolicitacao">Data Solicitação</label>
            <input type="date" class="form-control" name="datasolicitacao" id="datasolicitacao" placeholder="Auto preenchimento">
          </div>
          <div class="form-group col-md-4">
            <label for="nchamado">Número de chamado</label>
            <input type="number" class="form-control" name="nchamado" id="nchamado" placeholder="chamado citsmart">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="nome">Nome da peça defeituosa</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite" required="">
          </div>
          <div class="form-group col-md-6">
            <label for="tipo">Tipo</label>
            <select class="form-control" name="tipo" id="tipo">
             <option>Selecione...</option>
            <option value="Disco Rigido"> Disco Rigido </option>
            <option value="Fonte">Fonte </option>
            <option value="Impressora">Impressora </option>
            <option value="Memoria RAM">Memoria RAM </option>
            <option value="Monitor">Monitor </option>
            <option value="Mouse">Mouse </option>
            <option value="Placa de Video">Placa de Video </option>
            <option value="Placa Mae">Placa Mae </option>
            <option value="Placa Wireless">Placa Wireless </option>
            <option value="Processador">Processador </option>
            <option value="Switch">Switch </option>
            <option value="Tablets">Tablets </option>">
            <option value="Teclado">Teclado </option>
           </select>
         </div>
       </div>

       <div class="row">
        <div class="form-group col-md-6">
          <label for="marca">Marca</label>
          <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a função do usuário" required="">
        </div>

        <div class="form-group col-md-6">
          <label for="modelo">Modelo</label>
          <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite a função do usuário" required="">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="fabricante">Fabricante</label>
          <input type="text" class="form-control" id="fabricante" name="fabricante" placeholder="digite o fabricante" required="">
        </div>
        <div class="form-group col-md-4">
          <label for="numeroserie">Número Série</label>
          <input type="text" class="form-control" id="numeroserie" name="numeroserie" placeholder="Digite o N/Série" required="">
        </div>
        <div class="form-group col-md-4">
          <label for="fileToUpload">Foto da peça defeituosa</label>
          <input class="form-control" id='upload' name="upload[]" type="file" multiple="multiple" />                       
        </div>
      </div>

  <hr>

    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>

</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php';?>