<?php

include_once("database.php");  
include_once ("session.php");
$ID = $_GET['id'];
$dataAtual = date('d/m/y');
 
// attempt insert query execution
$sql = "UPDATE atividades SET concluido = 1, DataFim = '$dataAtual' WHERE IDatividade='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina concluida com Sucesso!.');window.location.href='../pages/lista_atividades.php';</script>";
 }else{
  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/lista_atividades.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>