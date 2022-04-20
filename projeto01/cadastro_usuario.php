<?php

  include('conexao.php');
  $nome_usuario = $_POST['txtNome'];
  $email_usuario = $_POST['txtEmail'];
  $telefone_usuario = $_POST['txtTelefone'];

  echo "<p>Nome do usuario:".$nome_usuario."<br>";
  echo "E-mail:".$email_usuario."<br>";
  echo "Telefone:".$telefone_usuario."</p>";

  $sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario)
         VALUES ('".$nome_usuario. "','".$email_usuario."','".$telefone_usuario."')";
   
   $result = mysqli_query($con, $sql);
   if($result)
      echo "Dados inseridos com sucesso";
   else
      echo "Erro ao inserir no banco de dados:".mysqli_error($con);     

  ?>