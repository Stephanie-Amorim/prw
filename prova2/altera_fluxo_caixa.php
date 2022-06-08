<?php
   include('conexao.php');
   $id_caixa = $_POST['id'];
   $sql = 'SELECT * FROM fluxo_caixa where id='.$id_caixa;
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
    <h1>Cadastro de Fluxo de Caixa  - IFSP</h1>
    <div id="teste">
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
                    <INPUT TYPE = "radio" NAME = "teste" 
                    VALUE = "Entrada"> Entrada 
           
                    <INPUT TYPE = "radio" NAME = "teste" 
                    VALUE = "Saida"> Saida 
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" placeholder="">
                </div>           
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="text" id="historico" name="historico" placeholder="">
                </div>
                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <input type="text"  id="cheque" size="30" name="cheque" placeholder="">
                </div>            
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>