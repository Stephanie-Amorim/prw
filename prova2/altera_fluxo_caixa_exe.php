<?php
  include('conexao.php');


  $id= $_POST['id'];
  $tipo = $_POST['tipo'];
  $historico = $_POST['historico'];
  $cheque = $_POST['cheque'];
      
  echo "<h1> Alteração de dados </h1>";
  echo "<p> Historico: " . $historico . "<p>";    
  if(isset($fotoNome)){
    $sql = "UPDATE fluxo_caixa SET
              tipo='".$tipo."',
              historico='".$historico."',
              cheque='".$cheque."',
              
            WHERE id_caixa=".$id_caixa;
  }
  else
  {
    $sql = "UPDATE fluxo_caixa SET
              tipo='".$tipo."',
              historico='".$historico."',
              cheque='".$cheque."'
            WHERE id=".$id;
  }
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>