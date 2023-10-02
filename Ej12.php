<?php 
$saltos = "2,3,4,1,5,3,6,7,8,1,10,0,20"; 
$cadena = explode(",", $saltos); 
$array = [$cadena]; 
for ($i = 0; $i<count($cadena); $i++){ 
    if ($cadena[$i]==0){ 
        $array[$i]=0; 
        break; 
    }else{ 
        $array[$i]=$cadena[$i]; 
        for ($j=1;$j<=$array[$i]; $j++){ 
            $array[$i+$j]="_"; 
        } 
        $i+=$j-1; 
    } 
} 
$cadenaFinal=implode(",",$array); 
echo $cadenaFinal; 
?>