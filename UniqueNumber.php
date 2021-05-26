<?php

function find_uniq($a){
    
    sort($a);  
    $uniqueNumber = 0;
    if($a[0]!=$a[1]){
        $uniqueNumber = $a[0];
    }
    else {
        $uniqueNumber = $a[array_key_last($a)];
    }
    return $uniqueNumber;    
}
