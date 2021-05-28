function countBits($n)
{
    $binary = decbin($n);
    return substr_count($binary,'1');
}
