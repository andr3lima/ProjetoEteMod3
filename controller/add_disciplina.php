<?php

include ("database.php");
include_once ("session.php");

$NomeDisciplina = $_POST['disciplina'];
$CursoUsuario = $_POST['curso'];
$Turma =  $_POST['turma'];
$Professor =  $_POST['professor'];
$Media =  $_POST['media'];
$Quantidade = $_POST['quantidade'];
$excluido = "0";
$IdUsuario = $_SESSION['usuarioId'];

// attempt insert query execution
$sql = "INSERT INTO disciplinas (IDusuario, NomeDisciplina, CursoUsuario, TurmaUsuario, Professor, Media, Quantidade, excluido) VALUES ('$IdUsuario','$NomeDisciplina', '$CursoUsuario', '$Turma', '$Professor', '$Media', '$Quantidade', '$excluido')";
if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Disciplina cadastrada com Sucesso!');window.location.href='../pages/index.php';</script>";
}else{
 	
  echo"<script language='javascript' type='text/javascript'>alert('Oops! numero de série ja cadastrada!');window.location.href='../pages/cadastro_disciplina.php';</script>";
	
}

// close connection
mysqli_close($conn);

?>