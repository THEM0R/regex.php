<?php
require_once 'function.php';

$pattern = '(foo)(bar)(baz)';
$string = 'foobarbaz';

preg_match(
    '#'.$pattern.'#',
    $string,
    $matches
//    ,PREG_OFFSET_CAPTURE
);

pr($matches);

