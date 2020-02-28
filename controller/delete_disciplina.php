<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
$ID = $_GET['id'];
 
// attempt insert query execution
 $sql = "UPDATE disciplinas SET excluido = '1' WHERE IDdisciplina='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina excluida com Sucesso!.');window.location.href='../pages/lista_disciplinas.php';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/lista_disciplinas.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>