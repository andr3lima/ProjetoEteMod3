<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
$ID = $_GET['id'];
 
// attempt insert query execution
 $sql = "UPDATE atividades SET excluido = '1' WHERE idAtividade='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina excluida com Sucesso!.');window.location.href='../pages/lista_atividades.php';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/lista_atividades.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>