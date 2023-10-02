<?php
    $array = [1, 2, 3, 4, 0];
    $suma=0;
    $array2=[];
    $j=0;
    for ($i=0; $i<count($array); $i++){
        $suma=0;
        for ($y=count($array)-1; $y>$i; $y--){
            $suma+=(int)$array[$y];
                       
        }
        if ($array[$i]>$suma){
            $array2[$j]=$array[$i];
            $j++;
        }
    }
    for ($i=0;$i<count($array2); $i++){
        echo "lider: ".$array2[$i];
    }
?>