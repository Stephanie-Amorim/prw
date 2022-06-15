<?php
   include('conexao.php');
   $id = $_GET['id'];
   $sql = 'SELECT * FROM fluxo_caixa where id='.$id;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro de Fluxo de Caixa </h1>
    
        <form method="post" action="altera_fluxo_caixa_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
                <div>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" value="<?php echo $row['data']?>" placeholder="">
                </div>
                <div class="form-item">
                    <label for="tipo">Tipo:</label>
                    <INPUT TYPE = "radio" NAME = "tipo" 
                    VALUE = "Entrada"> Entrada 
           
                    <INPUT TYPE = "radio" NAME = "tipo" 
                    VALUE = "Saida"> Saida 
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="valor" id="valor" name="valor" placeholder="">
                </div>           
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="historico" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="">
                </div>
                <div id=" centro">
                    <label for="tipo">Cheque:</label>
                    <select id="cheque" name="cheque">
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
                </div>            
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
                </div>
            </fieldset>
        </form>
  
</body>
</html>