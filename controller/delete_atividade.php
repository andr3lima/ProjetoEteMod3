<?php

include_once("database.php");  
include_once ("session.php");
 
$ID = $_GET['id'];
 
 $sql = "UPDATE atividades SET excluido = '1' WHERE idAtividade='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina excluida com Sucesso!.');window.location.href='../pages/lista_atividades.php';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/lista_atividades.php';</script>";
	
}
mysqli_close($conn);

?>