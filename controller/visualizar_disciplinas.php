<?php
include_once("database.php"); 
include_once ("session.php");
$IdUsuario = $_SESSION['usuarioId'];

//MySqli Select Query
$sql = "SELECT * FROM disciplinas where excluido=0 and IDusuario = $IdUsuario  ORDER BY IDdisciplina";

$results= mysqli_query($conn, $sql);

while($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>'.$row->NomeDisciplina.'</td>'; 
    print '<td>'.$row->CursoUsuario.'</td>';
    print '<td>'.$row->TurmaUsuario.'</td>';
    print '<td>'.$row->Professor.'</td>';


    print '<td class="actions">
	 <a class="btn btn-success btn-sm" href="view_disciplina.php?id='.$row->IDdisciplina.'">Visualizar</a>
	 <a class="btn btn-warning btn-sm" href="edit_disciplina.php?id='.$row->IDdisciplina.'">Editar</a>
	 <a class="btn btn-danger btn-sm"  href="../controller/delete_disciplina.php?id='.$row->IDdisciplina.'">Excluir</a></td>';
    print '</tr>';

}  

// close connection
mysqli_close($conn);
?>