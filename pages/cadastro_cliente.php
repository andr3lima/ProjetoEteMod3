<?php 
include 'menu.php';
?>

<div class="content-wrapper">

    <h3 class="text-primary mb-12">Cadastro de cliente</h3>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
        <script type='text/javascript' src='../js/cep.js'></script>
   <form id="form1" class="form1">

    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                   <form class="forms-sample" method="POST" action="../controller/add_usuario.php">
                        <div class="form-group">
  	<div class="row">
  	  <div class="form-group col-md-12">
  	  	<label for="exampleInputEmail1">Orgão</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
  	  </div>
    </div>
    <div class="row">
	  <div class="form-group col-md-3">
  	  	<label for="cer">CEP</label>
  	  	<input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o valor">
  	  </div>
    
	    <div class="form-group col-md-6">
        <label for="rua">Rua</label>
        <input type="text" class="form-control" name="rua" id="rua" placeholder="Digite o valor">
      </div>
	    <div class="form-group col-md-3">
        <label for="numero">Número</label>
        <input type="text" class="form-control" name="numero" id="numero" placeholder="Digite o valor">
      </div>
    </div>
              <div class="row"> 
	   <div class="form-group col-md-4">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o valor">
      </div>
	   <div class="form-group col-md-4">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite o valor">
      </div>
	
  	   <div class="form-group col-md-4">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" name="estado" id="estado" placeholder="Digite o valor">
      </div>
    </div>
</div>
	<hr />
	
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
  </div>
</div>
  
 
< <?php include 'footer.php';?>