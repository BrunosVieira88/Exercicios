<?php 

echo('oi' .PHP_EOL);

function summation($n) {
    
    $element = '';

    for ($index = $n; $index >= 0; $index--) {
        
        $element += $index;
        
    }

    return $element;
  }

   $resultado = summation(10);
    echo $resultado .PHP_EOL; 
?>