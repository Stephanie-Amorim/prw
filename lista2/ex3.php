 <?php
  
  for($i = 0; $i <= 200; $i++){
      $divisores = 0;

      for ($s = $i; $s>=1; $s--){
          if (($i % $s)==0){
              $divisores++;
          }
      }
      if ($divisores == 2){
          echo $i.',';
      }
  }
?>