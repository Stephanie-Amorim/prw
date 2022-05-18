<?php
    include ( 'conexao.php' );
    
	$id_usuario = $_GET [ 'id_usuario' ];

    $sql = 'DELETE FROM usuario WHERE id_usuario=' . $id_usuario ;
    
	echo  "<h1> Exclusão de Usuário </h1>" ;
	$resultado = mysqli_query ( $con , $sql );
	
	if ( $resultado )
		echo  "Registro removido com sucesso<br>" ;
		echo  "Erro ao excluir usuário: " . mysqli_error ( $con ). "<br>" ;
  
?>
<a href =' listar_usuários.php ' > Voltar </a>