<?php
include_once("database.php"); 
include_once ("session.php");

//MySqli Select Query
$sql = "SELECT id, nome, marca, tipo, numero_serie, status, data_cadastro, data_alteracao, tecnico  FROM pecas where excluido=0 and emprestimo = 1 ORDER BY id";

$results= mysqli_query($conn, $sql);

while($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>'.$row->id.'</td>';
    print '<td>'.$row->nome.'</td>'; 
    print '<td>'.$row->marca.'</td>';
    print '<td>'.$row->tipo.'</td>';
    print '<td>'.$row->numero_serie.'</td>';
    print '<td>'.$row->status.'</td>';
    print '<td>'.$row->data_cadastro.'</td>';
    print '<td>'.$row->data_alteracao.'</td>';
    print '<td>'.$row->tecnico.'</td>';

    print '<td class="actions">
	 <a class="btn btn-success btn-sm" href="view.php?id='.$row->id.'">Visualizar</a>
	 <a class="btn btn-warning btn-sm" href="edit_peca.php?id='.$row->id.'">Editar</a>';
    print '</tr>';

}  

// close connection
mysqli_close($conn);
?>