<?php

$nome = $_POST["txtNome"];
$CPF = $_POST["txtCPF"];
$RG = $_POST["txtRG"];
$Estado = $_POST["txtEstado"];
$Saldo_Cartao_Credito = $_POST["txtSaldo_Credito"];

echo $nome ."<br>";
echo $CPF ."<br>" ;
echo $RG ."<br>" ;
echo $Estado ."<br>";
echo $Saldo_Cartao_Credito ."<br>";
echo $total ."<br>";


$erro=0;
    if (strlen($nome)<5)
     { echo "O nome deve possuir no mínimo 5 caracteres."; $erro=1; } 

    if (strlen($RG)<5)

    { echo "O RG deve ser inserido corretamente."; $erro=1; } 

    if(empty($CPF))

    { echo "Favor digita seu CPF"; $erro=1; } 

    if(strlen($Estado)<5)

    { echo "Favor digitar seu estado corretamente"; $erro=1; } 

    if (empty($Saldo_Cartao_Credito))

    {  echo "Insira o saldo corretamente"; $erro=1; }

    if(empty ($Saldo_Cartao_Credito) < $total)

    

     //VERIFICA SE NÃO HOUVE ERRO
     if($erro==0)
    { echo "Todos os dados foram digitados corretamente!"; }

?>