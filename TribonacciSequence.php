<?php

function tribonacci($signature, $n) {
    if($n<2){
        $signature = array_slice($signature,0,$n);
        return $signature;
    }
    for($count=2;$count<$n-1;$count++){
        $signature[] = $signature[$count-2] + $signature[$count-1]+ $signature[$count];
    }
    return $signature;
}
