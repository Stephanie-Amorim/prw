<?php

  include('conexao.php');
  $nome = $_POST['txtNome'];
  $apelido = $_POST['txtApelido'];
  $endereço = $_POST['txtEndereco'];
  $bairro = $_POST['txtBairro'];
  $cidade = $_POST['txtCidade'];
  $estado = $_POST['txtEstado'];
  $telefone = $_POST['txtTelefone'];
  $celular = $_POST['txtCelular'];
  $email = $_POST['txtEmail'];
  $dt_cadastro = date("Y-m-d");
  

  echo "<p>Nome:".$nome."<br>";
  echo "Apelido:".$apelido."<br>";
  echo "Endereço:".$endereço."<br>";
  echo "Bairro:".$bairro."<br>";
  echo "Cidade:".$cidade."<br>";
  echo "Estado:".$estado."<br>";
  echo "Telefone:".$telefone."<br>";
  echo "Celular:".$celular."<br>";
  echo "E-mail:".$email."<br>";
  

  $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
         VALUES ('".$nome. "','".$apelido."','".$endereço."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."','".$dt_cadastro."')";
   
   $result = mysqli_query($con, $sql);
   if($result)
      echo "Dados inseridos com sucesso";
   else
      echo "Erro ao inserir no banco de dados:".mysqli_error($con);     

  ?>