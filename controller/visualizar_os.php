<?php
include_once("database.php"); 
include_once ("session.php");

//MySqli Select Query
$sql = "SELECT id, orgao, solicitante, tecnico, chamado, data_solicitacao, data_alteracao FROM os where excluido=0 ORDER BY id";

$results= mysqli_query($conn, $sql);

while($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>'.$row->id.'</td>';
    print '<td>'.$row->orgao.'</td>'; 
    print '<td>'.$row->solicitante.'</td>';
    print '<td>'.$row->tecnico.'</td>';
    print '<td>'.$row->chamado.'</td>';
    print '<td>'.$row->data_solicitacao.'</td>';
    print '<td>'.$row->data_alteracao.'</td>';

    print '<td class="actions">
	 <a class="btn btn-success btn-sm" href="view.php?id='.$row->id.'">Visualizar</a>
	 <a class="btn btn-warning btn-sm" href="edit_os.php?id='.$row->id.'">Editar</a>
	 <a class="btn btn-danger btn-sm"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></td>';
    print '</tr>';

}  

// close connection
mysqli_close($conn);
?>