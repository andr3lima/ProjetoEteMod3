<?php

include_once("database.php");  
include_once ("session.php");
 
// Escape user inputs for security
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
                $filePath = "../uploads/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file

                }
              }
        }
     }

$Orgao = $_POST['orgao'];
$Solicitante =  $_POST['solicitante'];
$Rua =  $_POST['rua'];
$Cep =  $_POST['cep'];
$Rua =  $_POST['rua'];
$Numero =  $_POST['numero'];
$Bairro =  $_POST['bairro'];
$Cidade= $_POST['cidade'];
$Estado =  $_POST['estado'];
$Tecnico =  $_POST['tecnico'];
$DataSolicitacao =  $_POST['datasolicitacao'];
$Nchamado =  $_POST['nchamado'];
$Nome = $_POST['nome'];
$Marca = $_POST['marca'];
$Modelo =  $_POST['modelo'];
$Fabricante =  $_POST['fabricante'];
$Numeroserie =  $_POST['numeroserie'];
$Tipo =  $_POST['tipo'];
$IdUsuario = $_SESSION['usuarioId'];
$Usuario = $_SESSION['usuarioNome'];

 
// attempt insert query execution

$sqlOS = "INSERT INTO os (orgao, solicitante,cep, rua, numero, bairro, cidade, estado, tecnico, data_solicitacao, chamado, usuario_cadastro, excluido) VALUES ('$Orgao', '$Solicitante', '$Cep', '$Rua', '$Numero', '$Bairro', '$Cidade', '$Estado', '$Tecnico', '$DataSolicitacao', '$Nchamado','$Usuario', '0')";

$sqlPeca = "INSERT INTO pecas (nome, marca, modelo, fabricante, numero_serie, tipo, status, usuario, excluido) VALUES ('$Nome', '$Marca', '$Modelo', '$Fabricante', '$Numeroserie', '$Tipo', 'Defeituosa', '$Usuario', '0')";

if (mysqli_query($conn, $sqlPeca) ) {
	# code...
$Idpeca = mysqli_insert_id($conn);
mysqli_query($conn, $sqlOS);
$IdOS = mysqli_insert_id($conn);

$sqlImg = "INSERT INTO imagens (id_usuario, id_os, id_peca, imagem) VALUES ('$IdUsuario', '$IdOS', '$Idpeca', '$filePath')";
$result = 	mysqli_query($conn, $sqlImg);

 echo"<script language='javascript' type='text/javascript'>alert('OS cadastrada com Sucesso!.');window.location.href='../pages/index.php';</script>";
 }else{
 	

  echo"<script language='javascript' type='text/javascript'>alert('Oops! numero de série ja cadastrada!.');window.location.href='../pages/cadastro_os.php';</script>";
	
}

// close connection
mysqli_close($conn);

?>