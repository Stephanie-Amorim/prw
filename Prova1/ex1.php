<?php
  $salario = 100;
  if ($salario <= 300)

    { $salario += ($salario /100) * 50; }
  
  else if ($salario > 300) 

  {  $salario += ($salario/100) * 30; }
   
   echo $salario;

?>