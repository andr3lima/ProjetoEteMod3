<?php

include_once("database.php");  
include_once ("session.php");

$IDdisciplina = $_POST['IDdisciplina'];
$descricao = $_POST['descricao'];
$nota = $_POST['nota'];
$idNota = $_POST['IDnota'];

$sql = "UPDATE notas SET descricao = '$descricao', valor = '$nota' WHERE id='$idNota'";

if (mysqli_query($conn, $sql)){
  echo"<script language='javascript' type='text/javascript'>alert('Nota atualizada com Sucesso!');window.location.href='../pages/view_disciplina.php?id=$IDdisciplina';</script>";
 }else{
  echo"<script language='javascript' type='text/javascript'>alert('Oops! Algo deu errado');window.location.href='../pages/view_disciplina.php?id=$IDdisciplina;</script>";
	
}
// close connection
mysqli_close($conn);

?>