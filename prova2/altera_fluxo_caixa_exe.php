<?php
  include('conexao.php');
    $id= $_POST['id'];
    $data = date($_POST['data']);
    $tipo = $_POST['tipo'];
    $valor= doubleval($_POST['valor']);
    $historico= ucwords($_POST['historico']);
    $cheque= $_POST['cheque'];
      
  echo "<h1> Alteração de dados </h1>";
  //echo "<p>  data alterada:" .$data. "<p>";
	    
   $sql = "UPDATE  fluxo_caixa  SET
           tipo= '".$tipo."',
           data= '".$data."',
           valor= ".$valor.",
           historico= '".$historico."',
           cheque= '".$cheque."' 

           WHERE id=".$id;

	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>