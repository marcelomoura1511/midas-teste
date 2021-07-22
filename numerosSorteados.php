<?php
 
    $array=[];
    for($i=0; $i<20; $i++){
        $array[] = random_int(1, 10);
    }
    echo "Array sorteado = [".implode(",", $array)."]<br>";
    $countArray = array_count_values($array);
    $maxVal = max($countArray);
    $maxValKeys = array_keys($countArray, $maxVal);
    asort($maxValKeys);
    echo "O(s) número(s) que mais se repete: " . implode(", ", $maxValKeys);
    echo "<br>Se repete: $maxVal vezes";


?>