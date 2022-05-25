<?php
    include('conexao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['txtNome'];
    $apelido = $_POST['txtApelido'];
    $endereço = $_POST['txtEndereco'];
    $bairro = $_POST['txtBairro'];
    $cidade = $_POST['txtCidade'];
    $estado = $_POST['txtEstado'];
    $telefone = $_POST['txtTelefone'];
    $celular = $_POST['txtCelular'];
    $email = $_POST['txtEmail'];
    
        
    echo "<h1>Alteração de Dados</h1>";
    echo "<p> Nome: " . $nome. "<p>";  
    echo "Apelido:" . $apelido."<br>";
    echo "Endereço:" . $endereço."<br>";
    echo "Bairro:" . $bairro."<br>";
    echo "Cidade:" . $cidade."<br>";
    echo "Estado:" . $estado."<br>";
    echo "Telefone:" . $telefone."<br>";
    echo "Celular:" . $celular."<br>";
    echo "E-mail:" . $email."<br>";
    
	
	$sql = "UPDATE agenda SET
            nome='".$nome."',
            apelido='".$apelido."'
            endereço:".$endereço."
            bairro:".$bairro."
            cidade:".$cidade."
            estado:".$estado."
            telefone='".$telefone."'
            celular:".$celular."
            email='".$email."'
            

          WHERE id_agenda=".$id_agenda;
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>