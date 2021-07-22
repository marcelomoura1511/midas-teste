<?php 

function sequenciaCrescente($array){
    foreach ($array as $key=>$value) {
        $arrayMenosUm = $array;
        unset($arrayMenosUm[$key]);
        $arrayOrdenada = array_unique($arrayMenosUm);
        asort($arrayOrdenada);
        if($arrayMenosUm === $arrayOrdenada) return true;
    }
    return false;
}

?>