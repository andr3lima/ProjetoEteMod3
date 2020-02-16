<?php 
include 'menu.php';
?>

<div class="content-wrapper">
    <h3 class="text-primary mb-12">Editar de peças</h3>
      <form method="POST" action="../controller/update_pecas.php">
    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                  <form > 
    <?php include("../controller/listar_peca.php"); ?>
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