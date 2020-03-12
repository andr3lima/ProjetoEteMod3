<?php 
include 'menu.php';
?>

<div class="content-wrapper">
    <h3 class="text-primary mb-12">Editar Nota</h3>
      <form method="POST" action="../controller/update_notas.php">
    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
    <?php include("../controller/listar_notas.php"); ?>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </div>
            </form>
          </div>
        </div>
      </div>

    </div>

  </div>

  <?php include 'footer.php';?>