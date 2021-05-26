<?php

function duplicateCount($text) {
    $tempText = array_count_values(str_split(strtolower($text)));
    $countDuplicates = 0;
    foreach ($tempText as $value){
        if($value>1) $countDuplicates++;
    }
  
    return $countDuplicates;
}
