<?php 
include ("menu.php");
include_once("../controller/database.php"); 
$IdUsuario = $_SESSION['usuarioId'];
?>

<div class="content-wrapper">
    <h3 class="text-primary mb-12">Editar Perfil</h3>
    <form method="POST" action="../controller/update_perfil.php">
        <div class="row mb-12">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                    <?php
                        $sql = "SELECT * FROM usuarios WHERE excluido=0 and ID=$IdUsuario";
                        $results= mysqli_query($conn, $sql);
                        $row = $results->fetch_object();
                         ?>
                <div class="row">
                <?php
                print'
                    <div class="form-group col-md-12">
                        <label for="usuario">Nome</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" value="' .$row->usuario. '"  required="">
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label for="E-mail">Nome</label>
                        <input type="text" class="form-control" name="email" id="email" value="' .$row->email. '"  required="">
                    </div>'
                ?>

                
      </div>

                        <hr/>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

  </div>

  <?php include 'footer.php';?>