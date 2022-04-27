<?php
  include('conexao.php');
  $id_usuario = $_GET['id_usuario'];
  $sql = 'SELECT * FROM usuario where id_usuario ='. $id_usuario;
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

	<title>Cadastro de Clientes</title>
</head>
<body>
    <h2> Alteracao de Usuario - IFSP</h2>

    <form method = "GET" action = "cadastro_usuario.php">
    <fieldset>
    Digite seu Nome: <input type= "nome_usuario" size="50" name="txtNome" id= "txtNome" value= "<?php echo $row['nome_usuario']?>"> <br>

    Digite seu E-mail: <input type= "email_usuario" size="50" name="txtEmail" id= "txtEmail" value= "<?php echo $row['email_usuario']?>"> <br> 
    
    Digite seu Telefone: <input type= "telefone_usuario" size="30" name="txtTelefone" id= "txtTelefone" value= "<?php echo $row['telefone_usuario']?>"> <br>
    <div id="botao">
    <INPUT TYPE = "submit"  NAME = "Enviar" VALUE = "Enviar"> 
    </div>
    </fieldset>
</form>  
</body>
</html>