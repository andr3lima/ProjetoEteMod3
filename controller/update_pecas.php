<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
$ID = $_POST['idpeca'];
$Nome = $_POST['nome'];
$Marca = $_POST['marca'];
$Modelo =  $_POST['modelo'];
$Fabricante =  $_POST['fabricante'];
$Numeroserie =  $_POST['numeroserie'];
$Tipo =  $_POST['tipo'];
$Etiqueta= $_POST['etiqueta'];
$Status =  $_POST['status'];
$Tecnico =  $_POST['tecnico'];
$Usuario = $_SESSION['usuarioNome'];
 
// attempt insert query execution
 $sql = "UPDATE pecas 
          SET nome ='$Nome', marca='$Marca', modelo='$Modelo', fabricante='$Fabricante', numero_serie='$Numeroserie', tipo='$Tipo', etiqueta='$Etiqueta', status='$Status', usuario='$Usuario', tecnico='$Tecnico', emprestimo='1'
          WHERE id='$ID'";

if (mysqli_query($conn, $sql))
 {
  echo"<script language='javascript' type='text/javascript'>alert('Peça atualizada com Sucesso!.');window.location.href='../pages/index.php';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! numero de série ja cadastrada!.');window.location.href='../pages/cadastro_pecas.php';</script>";
	
}
// close connection
mysqli_close($conn);

?>