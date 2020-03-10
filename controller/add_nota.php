<?php

include_once("database.php"); 
$descricao = $_POST['descricao'];
$nota =  $_POST['nota'];
$IDdisciplina =  $_POST['IDdisciplina'];
$sql = "INSERT INTO notas (excluido, descricao, valor, IDdisciplina) VALUES (0, '$descricao', '$nota', '$IDdisciplina')";

if (is_numeric ($nota)){
  if (mysqli_query($conn, $sql)){
    echo"<script language='javascript' type='text/javascript'>alert('Nota adicionada com sucesso!');window.location.href='../pages/view_disciplina.php?id=$IDdisciplina';</script>";
   }else{
     echo"<script language='javascript' type='text/javascript'>alert('Algo deu errado!');window.location.href='../pages/view_disciplina.php?id=$IDdisciplina;</script>";
   }
}else{
  echo"<script language='javascript' type='text/javascript'>alert('Digite uma nota valida!');window.location.href='../pages/view_disciplina.php?id=$IDdisciplina';</script>";
}


 //close connection
mysqli_close($conn);

?>
