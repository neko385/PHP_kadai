<?php
$list = [0, 1];

for($i = 0; $i < 25; ++$i){
    
    $list[] = $list[$i] + $list[$i+1];
    
    
    if ($list[$i] < 10000) {
        echo "{$list[$i]} \n" ;
    } else {
        echo "{$list[$i]} \n" ;
        break;
    }    
}





