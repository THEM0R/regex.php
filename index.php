<?php
require_once 'function.php';

$pattern = '^([a-z0-9]+)';
$pattern = '#'.$pattern.'#';
$pattern = $pattern.'i';

$string = 'fooBar756765baZ';

preg_match(
    $pattern,
    $string,
    $matches
//    ,PREG_OFFSET_CAPTURE
);

pr($matches);