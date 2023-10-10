<?php 

echo('oi' .PHP_EOL);

function summation($classPoints, $yourPoints) {
    
   
    $totalPoints = 0;
  
    foreach ($classPoints as $points) {
            $totalPoints += $points; 
        
      }
      $totalPoints = $totalPoints/count($classPoints);

      return $yourPoints >= $totalPoints ? true : false ;
  }

   $resultado = summation([2, 3], 5);
    echo $resultado .PHP_EOL; 
?>