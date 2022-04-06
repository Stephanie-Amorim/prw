<?php
  $dia_semana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

  $data = date('Y-m-d');

  $diasemana_numero = date('w', strtotime($data));
 echo $dia_semana[$diasemana_numero];
?>