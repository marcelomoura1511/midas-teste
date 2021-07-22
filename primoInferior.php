<?php 

function primoInferior($num){
    if($num<0) return 0;
    for ($i=$num-1; $i>=0; $i--){
        $primo = true;
        for($j=2; $j<=$i/2; $j++){
            if($i%$j==0){
                $primo=false;
                break;
            }
        }
        if($primo) return $i;
    }
}
?>