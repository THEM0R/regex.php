<?php
require_once 'function.php';

// lesson 0
//
//$pattern = '^([a-z0-9]+)';
//$pattern = '#'.$pattern.'#';
//$pattern = $pattern.'i';
//
//$string = 'fooBar756765baZ';
//
//preg_match(
//    $pattern,
//    $string,
//    $matches
////    ,PREG_OFFSET_CAPTURE
//);
//
//pr($matches);

//echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ipsum, veniam. Commodi consectetur dolorem, fugit iure perspiciatis ratione tenetur! Alias delectus dolore pariatur porro ratione suscipit unde veritatis? Ea, perspiciatis.</p>';

// lesson 1

// #\[hide].*?\[/hide]#gi

//Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ipsum, veniam. Commodi consectetur dolorem, fugit
//[HIDE]SLAVIK[/HIDE]
//iure perspiciatis ratione tenetur! Alias delectus dolore pariatur porro ratione suscipit unde veritatis? Ea, perspiciatis.

// replace : links


// lesson 2

//$str = 'gray';
//$pattern = '#gr.y#';
//
//if (preg_match($pattern, $str)) {
//    echo "Строка |<b>$str</b>| <span style='color: green'>совпала</span> с шаблоном <b><em>$pattern</em></b>";
//} else {
//    echo "Строка |<b>$str</b>| <span style='color: red'>не совпала</span> с шаблоном <b><em>$pattern</em></b>";
//}



//if (preg_match($pattern, $str)) {
//    echo "Строка |<b>$str</b>| <span style='color: green'>совпала</span> с шаблоном <b><em>$pattern</em></b>";
//} else {
//    echo "Строка |<b>$str</b>| <span style='color: red'>не совпала</span> с шаблоном <b><em>$pattern</em></b>";
//}


// . любий символ окрім переносу строки

// lesson 4
//
//$str = '<h1>
//<h2>
//<p>
//<h7>
//<em>
//<h3>
//<strong>
//<h5>
//<hr>
//<h9>';
//$pattern = '#<h[1-6]>#';
//
//preg_match_all($pattern, $str, $matches);
//
//foreach ($matches[0] as $match){
//    echo htmlspecialchars($match);
//}
//exit;
//pr1($matches);

// lesson 5













