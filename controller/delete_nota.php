<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
$ID = $_GET['id'];
$sql = "SELECT * FROM notas where excluido=0 and id = $ID ";
$results= mysqli_query($conn, $sql);
$row = $results->fetch_object();
 
// attempt insert query execution
 $sql = "UPDATE notas SET excluido = '1' WHERE id='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Nota excluida com Sucesso!.');window.location.href='../pages/view_disciplina.php?id=$row->IDdisciplina';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/view_disciplina.php?id=$row->IDdisciplina';</script>";
	
}
// close connection
mysqli_close($conn);

?>