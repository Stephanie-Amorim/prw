<?php
   $num1 = 8;
   $num2 = 5;
   $num3 = 2;
    
   if ($num1 > $num2 && $num1 > $num3 ){
       if ($num2> $num3 ){
           echo "A ordem decrescente é:". $num1."". $num2."".$num3;
       }
       else {
           echo $num1."".$num3."".$num2;
       }
   }

   if ($num2 > $num1 && $num2 > $num3 ){
    if ($num1> $num3 ){
        echo "A ordem decrescente é:". $num2."". $num1."".$num3;
    }
    else {
        echo $num2."".$num1."".$num3;
    }
}

if ($num3 > $num1 && $num3 > $num2){
    if ($num2> $num1 ){
        echo "A ordem decrescente é:". $num3."". $num2."".$num1;
    }
    else {
        echo $num3."".$num2."".$num1;
    }
}
?>
    