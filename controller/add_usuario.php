<?php

include_once("database.php"); 

$NomeUsuario = $_POST['nome'];
$FuncaoUsuario = $_POST['funcao'];
$EmailUsuario =  $_POST['email'];
$Senha1Usuario =  $_POST['senha1'];
$Senha2Usuario =  $_POST['senha2'];
$SenhaUsuario = md5($Senha1Usuario);
 
// attempt insert query execution
 $sql = "INSERT INTO usuarios (usuario, funcao, email, senha, excluido) VALUES ('$NomeUsuario', '$FuncaoUsuario', '$EmailUsuario', '$SenhaUsuario', '0')";

if ($Senha1Usuario == $Senha2Usuario && mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com Sucesso!.');window.location.href='../pages/index.php';</script>";
}else{
  echo"<script language='javascript' type='text/javascript'>alert('Oops! A senha não são iguais! Tente novamente.');window.location.href='../pages/cadastro_usuario.php';</script>";

}
// close connection
mysqli_close($conn);

?>
