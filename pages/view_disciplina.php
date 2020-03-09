<?php 
include 'menu.php';
include_once("../controller/database.php"); 
$IdUsuario = $_SESSION['usuarioId'];
$ID = $_GET['id'];
$sql = "SELECT * FROM disciplinas WHERE excluido=0 and IDusuario=$IdUsuario and IDdisciplina = $ID";
$results= mysqli_query($conn, $sql);
$row = $results->fetch_object();
?>

<div class="content-wrapper">
    <h3 class="text-primary mb-12"><?php echo $row -> NomeDisciplina; ?> </h3>
     
    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                  
        
    <?php include("../controller/visao_disciplina.php"); ?>
       
          </div>
        </div>
      </div>

    </div>

  </div>

  <?php include 'footer.php';?>