
<?php 

function seculoAno($ano){
  $seculo = intval(($ano/100)+1);
  return $seculo
}  

echo seculoAno(1905);
?> 
  