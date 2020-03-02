<?php

include ("database.php");
include_once ("session.php");

$NomeAtividade = $_POST['atividade'];
$Disciplina = $_POST['disciplina'];
$Data =  $_POST['data'];
$IdUsuario = $_SESSION['usuarioId'];

// attempt insert query execution
$sql = "INSERT INTO atividades (NomeAtividade, Disciplina, DataEntrega, IDusuario) VALUES ('$NomeAtividade','$Disciplina', '$Data', '$IdUsuario')";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Atividade cadastrada com Sucesso!');window.location.href='../pages/cadastro_atividade.php';</script>";
}else{
 	
  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado!');window.location.href='../pages/cadastro_atividade.php';</script>";
	
}

// close connection
mysqli_close($conn);

?>