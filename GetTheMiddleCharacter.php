<?php

function getMiddle($text) {
    $countSigns = strlen($text)%2 == 0 ? 2 : 1;
    $findMiddle = strlen($text)%2 == 0 ? strlen($text)/2-1 : strlen($text)/2;
    return substr($text,$findMiddle,$countSigns);
}
