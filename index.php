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
// home work 1

//$str = 'goods1		15
//goods2	17.5
//goods3		20
//goods4		21
//goods5	18';
//
//$pattern = '#\t\t#';
//$replacement = '\t'; // обовязково двойні кавички ! бо так не спрацює
//$replacement = "\t"; // обовязково двойні кавички !
//
//$res = preg_replace($pattern, $replacement, $str);

//pr1($res);

// home work 2

//$str = 'string1
//string2
//
//string3
//string4
//
//string5';
//
//$pattern = '#\r\n\r\n#';
//$replacement = '\r\n'; // обовязково двойні кавички ! бо так не спрацює
//$replacement = "\r\n"; // обовязково двойні кавички !
//
//$res = preg_replace($pattern, $replacement, $str);
//
//pr1($res);

// lesson 6

// \w@\w\.\w

//test.mor.ua@gmail.com
//test.ua@gmail.com
//test@gmail.com

// 1\+2 = 1+2































