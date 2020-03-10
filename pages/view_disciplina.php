<?php 
include 'menu.php';
include_once("../controller/database.php"); 
$IdUsuario = $_SESSION['usuarioId'];
$ID = $_GET['id'];
$sql = "SELECT * FROM notas INNER JOIN disciplinas on notas.IDdisciplina = disciplinas.IDdisciplina WHERE notas.excluido=0 and notas.IDdisciplina = $ID";
$results= mysqli_query($conn, $sql);
$row = $results->fetch_object();

$disciplinas = "SELECT * FROM disciplinas WHERE excluido = 0 AND IDdisciplina = $ID";
$resultDisciplinas =  mysqli_query($conn, $disciplinas);
$rowDisciplinas = $resultDisciplinas->fetch_object();

$IDdisciplina = $rowDisciplinas->IDdisciplina;

?>

<div class="content-wrapper">
    <h3 class="text-primary mb-12"><?php echo $rowDisciplinas ->NomeDisciplina; ?> </h3>
     
    <div class="row mb-12">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                  <?php include("../controller/visao_disciplina.php"); ?>
                </div>
              </div>
      <div class="row mb-12">
          <div class="col-lg-12">
          <br><h3 class="text-primary mb-12">Nova nota</h3> <br>
            <div class="card">
              <?php include("../pages/new_nota.php"); ?>
            </div>
          </div>
        </div>
            
          </div>

    </div>

  </div>
  
  <?php include 'footer.php';?>