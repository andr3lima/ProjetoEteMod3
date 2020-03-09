<?php
include_once("database.php");  
include_once ("session.php");
$IdUsuario = $_SESSION['usuarioId'];
$sql = "SELECT * FROM usuarios WHERE excluido=0 and ID=$IdUsuario";
$results= mysqli_query($conn, $sql);
$row = $results->fetch_object();
$senha = md5($_POST['senha']) ;
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];
$novasenha = md5($senha1);
$senhabanco = $row->senha;

$update = "UPDATE usuarios SET senha = '$novasenha' WHERE ID=$IdUsuario";

if ($senha != $senhabanco) {  
    echo"<script language='javascript' type='text/javascript'>alert('senha incorreta!');window.location.href='../pages/edit_senha.php';</script>";

}else if ($senha1 != $senha2) {
    echo"<script language='javascript' type='text/javascript'>alert('as senhas não correspondem');window.location.href='../pages/edit_senha.php';</script>";
}else if (mysqli_query($conn, $update)) {
    echo"<script language='javascript' type='text/javascript'>alert('Senha atualizada com sucesso');window.location.href='../pages/edit_senha.php';</script>";

}else {
    echo"<script language='javascript' type='text/javascript'>alert('Error 404 not found!');window.location.href='../pages/edit_senha.php';</script>";
}

?>