<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
$Nome = $_POST['nome'];
$Marca = $_POST['marca'];
$Modelo =  $_POST['modelo'];
$Fabricante =  $_POST['fabricante'];
$Numeroserie =  $_POST['numeroserie'];
$Tipo =  $_POST['tipo'];
$Etiqueta= $_POST['etiqueta'];
$Status =  $_POST['status'];
$Usuario = $_SESSION['usuarioNome'];
 
// attempt insert query execution
 $sql = "INSERT INTO pecas (nome, marca, modelo, fabricante, numero_serie, tipo, etiqueta, status, usuario, excluido) VALUES ('$Nome', '$Marca', '$Modelo', '$Fabricante', '$Numeroserie', '$Tipo', '$Etiqueta', '$Status', '$Usuario', '0')";

if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Peça cadastrada com Sucesso!.');window.location.href='../pages/index.php';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! numero de série ja cadastrada!.');window.location.href='../pages/cadastro_pecas.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>