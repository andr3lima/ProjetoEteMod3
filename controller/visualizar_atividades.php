<?php
include_once("database.php"); 
include_once("session.php");
$IdUsuario = $_SESSION['usuarioId'];

//MySqli Select Query
$sql = "SELECT a.NomeAtividade as Atividade, d.NomeDisciplina as Disciplina, a.DataEntrega as DataEntrega, a.IDatividade as idAtividade, a.concluido as concluido  FROM atividades as a inner join disciplinas as d on d.IDdisciplina = a.Disciplina  where a.excluido = 0 and a.IDusuario = $IdUsuario  and concluido = 0 ORDER BY a.IDatividade";
$results= mysqli_query($conn, $sql);

while($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>'.$row->Atividade.'</td>'; 
    print '<td>'.$row->Disciplina.'</td>';
    print '<td>'.$row->DataEntrega.'</td>';


    print '<td class="actions">
	 <a class="btn btn-success btn-sm" href="../controller/concluir_atividade.php?id='.$row->idAtividade.'">Concluir</a>
	 <a class="btn btn-warning btn-sm" href="edit_atividade.php?id='.$row->idAtividade.'">Editar</a>
	 <a class="btn btn-danger btn-sm"  href="../controller/delete_atividade.php?id='.$row->idAtividade.'">Excluir</a></td>';
    print '</tr>';

}  

// close connection
mysqli_close($conn);
?>