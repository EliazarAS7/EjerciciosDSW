<?php
    $array=[];
    $y=0;
    for ($i = 1; $i<=100; $i++){
        if ($i%2==0){
            $array[$y]=$i;
            $y++;
        }
    }

    for ($i = 0; $i<count($array); $i++){
        echo $array[$i]."<br>";
    }
?>