<?php 
include 'menu.php';
?>

<div class="content-wrapper">
    <h3 class="text-primary mb-12">Cadastro de peças</h3>
      <form method="POST" action="../controller/add_pecas.php">
    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                  <form > 
   <div class="row">
      <div class="form-group col-md-12">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome completo do usuário" required="">
        </div>
  </div>

  <div class="row">
      <div class="form-group col-md-6">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca" required="">
      </div>

      <div class="form-group col-md-6">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite o modelo" required="">
      </div>
  </div>

  <div class="row">
      <div class="form-group col-md-6">
        <label for="fabricante">Fabricante</label>
        <input type="text" class="form-control" id="fabricante" name="fabricante" placeholder="digite o fabricante" required="">
      </div>
      <div class="form-group col-md-6">
        <label for="numeroserie">Número Série</label>
        <input type="text" class="form-control" id="numeroserie" name="numeroserie" placeholder="Digite o N/Série" required="">
      </div>
  </div>

  <div class="row">
    <div class="form-group col-md-4">
      <label for="tipo">Tipo</label>
        <select class="form-control" name="tipo" id="tipo">
         <option>Selecione...</option>
          <option value="Disco Rigido"> Disco Rigido </option>
          <option value="Fonte">Fonte </option>
          <option value="Fonte">Estabilizador </option>
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

    <div class="form-group col-md-4">
      <label for="status">Status</label>
      <select class="form-control" name="status" id="status">
        <option>Selecione...</option>
        <option value="Nova">Nova</option>
        <option value="Recondicionada">Usada</option>
        <option value="Nova">Defeituosa</option>

      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="etiqueta">Etiqueta</label>
      <input type="text" class="form-control" id="etiqueta" name="etiqueta" placeholder="Digite a etiqueta">
    </div>
  </div>
<hr />
    <div class="row">
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

  <?php include 'footer.php';?>