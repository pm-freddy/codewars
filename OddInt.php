<?php

function findIt(array $seq) : int
{
    $oddint = 0;
    $seq = array_count_values($seq);
    foreach($seq as $key => $value){
        if($value%2 != 0){
            $oddint = $key;
        }
    }
    return $oddint;
}
