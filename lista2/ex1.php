<?php

//Faça um script PHP para somar os números pares < 100..
  $soma = 0;

  for ($num=0; $num<=100;$num++){
      if ($num % 2==0){
          $soma = $soma + $num;
      }
  }
  echo "A soma do numeros pares é :".$soma;
?>