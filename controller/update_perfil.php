<?php
include_once("database.php");  
include_once ("session.php");
$IdUsuario = $_SESSION['usuarioId'];
$sql = "SELECT * FROM usuarios WHERE excluido=0 and ID=$IdUsuario";
$results= mysqli_query($conn, $sql);
$row = $results->fetch_object();
$usuario = $_POST['usuario'];
$email = $_POST['email'];

$update = "UPDATE usuarios SET usuario = '$usuario', email = '$email' WHERE ID=$IdUsuario";

if (mysqli_query($conn, $update)) {
    echo"<script language='javascript' type='text/javascript'>alert('Perfil atualizado com sucesso');window.location.href='../pages/edit_perfil.php';</script>";
    session_start();
    $result_usuario = "SELECT * FROM usuarios WHERE excluido=0 and ID=$IdUsuario";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $_SESSION['usuarioNome'] = $resultado['usuario'];

}else {
    echo"<script language='javascript' type='text/javascript'>alert('Erro 404 not found!');window.location.href='../pages/edit_perfil.php';</script>";
}

?>