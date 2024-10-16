<?php
$list = [0, 1];

for($i = 0, $j =1; $i < $j; ++$i,++$j){
    
    $list[] = $list[$i] + $list[$i+1];
    
    if ($list[$i] < 10000) {
        echo "{$list[$i]} \n" ;
    } else {
        echo "{$list[$i]} \n" ;
        break;
    }   
    
}





