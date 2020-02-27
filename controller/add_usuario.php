<?php

include_once("database.php"); 

$NomeUsuario = $_POST['nome'];
$email =  $_POST['email'];
$Senha1Usuario =  $_POST['senha1'];
$Senha2Usuario =  $_POST['senha2'];
$SenhaUsuario = md5($Senha1Usuario);
$sql = "INSERT INTO usuarios (usuario, email, senha, excluido) VALUES ('$NomeUsuario', '$email', '$SenhaUsuario', '0')";

if ($Senha1Usuario != $Senha2Usuario){
  echo"<script language='javascript' type='text/javascript'>alert('Oops! As senhas não são iguais! Tente novamente.');window.location.href='../pages/cadastro_usuario.php';</script>";
}
else if (mysqli_query($conn, $sql))
{
 echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com Sucesso!.');window.location.href='../index.php';</script>";
}else{
  echo"<script language='javascript' type='text/javascript'>alert('Usuário já cadastrado!');window.location.href='../pages/cadastro_usuario.php';</script>";

}


 //close connection
mysqli_close($conn);

?>
