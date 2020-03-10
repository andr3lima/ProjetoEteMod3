<?php
include_once("database.php"); 
include_once ("session.php");

//MySqli Select Query
$sql = "SELECT * FROM notas where excluido=0 and IDdisciplina = $ID ";

$results= mysqli_query($conn, $sql);

while($row = $results->fetch_object()) {
    print '<tr>';
    print '<td></td>'; 
    print '<td>'.$row->descricao.'</td>'; 
    print '<td>'.$row->valor.'</td>';



    print '<td class="actions">
	 <a class="btn btn-warning btn-sm" href="edit_nota.php?id='.$row->id.'">Editar</a>
	 <a class="btn btn-danger btn-sm"  href="../controller/delete_nota.php?id='.$row->id.'">Excluir</a></td>';
    print '</tr>';

}  

// close connection
mysqli_close($conn);
?>