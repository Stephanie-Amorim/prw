<?php
    include ( 'conexao.php' );
    
	$id_agenda = $_POST [ 'id_agenda' ];

    $sql = 'DELETE FROM agenda WHERE id_agenda=' . $id_agenda ;
    
	echo  "<h1> Exclusão de Agenda </h1>" ;
	$resultado = mysqli_query ( $con , $sql );
	
	if ( $resultado )
		echo  "Registro removido com sucesso<br>" ;
		echo  "Erro ao excluir agenda: " . mysqli_error ( $con ). "<br>" ;
  
?>
<a href =' listar_agenda.php ' > Voltar </a>