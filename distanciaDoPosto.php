<?php 

echo('oi' .PHP_EOL);

function zeroFuel($distanceToPump, $mpg, $fuelLeft) {
  
    $totalLeft = $fuelLeft * $mpg; 
    
    return $distanceToPump <= $totalLeft ? true : false; 
  }

   $resultado = summation(50,25,2);
    echo $resultado .PHP_EOL; 
?>