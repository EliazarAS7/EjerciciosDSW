<?php
    $cadena="1,2,3,2,4,1,5";
    $array=explode(",", $cadena);
    $array2=array_unique($array);
    $cadena2=implode(",", $array2);

    echo $cadena."<br>";
    echo $cadena2;
?>