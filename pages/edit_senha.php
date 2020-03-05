<?php 
include ("menu.php");
include_once("../controller/database.php"); 
$IdUsuario = $_SESSION['usuarioId'];
?>

<div class="content-wrapper">
    <h3 class="text-primary mb-12">Modificar senha</h3>
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
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="Password" id="senha" name="senha" class="form-control p_input" placeholder="Digite sua senha atual" required="">
                  </div>
                </div>
             
                <div class="form-group col-md-6">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="Password" id="senha1" name="senha1" class="form-control p_input" placeholder="Nova senha" required="">
                  </div>
                </div>
              
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="Password" id="senha2" name="senha2" class="form-control p_input" placeholder="Repita a nova senha" required="">
                  </div>
                </div>'
                ?>

                
      </div>

                        <hr/>
                        <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary mr-3">Atualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

  </div>

  <?php include 'footer.php';?>