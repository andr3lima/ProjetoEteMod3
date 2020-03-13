<?php

include_once("database.php");
include_once ("session.php");
$ID = $_GET['id'];

$sqldata = "SELECT DataEntrega from atividades WHERE IDatividade = '$ID'";
$results= mysqli_query($conn, $sqldata);
$row = $results->fetch_object();

$DataEntrega = $row->DataEntrega;

$dataAtual = date('y-m-d');
                                

if(strtotime($dataAtual) > strtotime($DataEntrega)){
  $status = 5;
} else{
  $status = 4;
}

// attempt insert query execution
$sql = "UPDATE atividades SET concluido = 1, DataFim = '$dataAtual', status = '$status' WHERE IDatividade='$ID'";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina concluida com Sucesso!.');window.location.href='../pages/lista_atividades.php';</script>";
 }else{
  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/lista_atividades.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>