
<?php 

function seculoAno($ano){
  $seculo = ($ano%100==0)?intval($ano/100) : intval($ano/100)+1;
  return $seculo;
}  

?> 
  