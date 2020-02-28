<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
$Nome = $_POST['disciplina'];
$Curso = $_POST['Curso'];
$Turma =  $_POST['Turma'];
$Professor =  $_POST['Professor'];
$Media =  $_POST['Media'];
$quantidade =  $_POST['quantidade'];
$ID = $_POST['IDdisciplina'];
 
// attempt insert query execution
 $sql = "UPDATE disciplinas SET NomeDisciplina = '$Nome', CursoUsuario = '$Curso', TurmaUsuario = '$Turma', Professor = '$Professor', Media ='$Media' ,Quantidade = '$quantidade' WHERE IDdisciplina='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina atualizada com Sucesso!.');window.location.href='../pages/index.php';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/lista_disciplinas.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>