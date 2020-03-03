<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
$atividade = $_POST['atividade'];
$disciplina = $_POST['disciplina'];
$DataEntrega =  $_POST['DataEntrega'];
$ID = $_POST['IDatividade'];
 
// attempt insert query execution
 $sql = "UPDATE atividades SET NomeAtividade = '$atividade', Disciplina = '$disciplina', DataEntrega = '$DataEntrega' WHERE IDatividade='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina atualizada com Sucesso!.');window.location.href='../pages/lista_atividades.php';</script>";
 }else{
  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/lista_atividades.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>