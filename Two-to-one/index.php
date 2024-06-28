Take 2 strings s1 and s2 including only letters from a to z. Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.
Examples:

a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz" <br>

<h1>MY FIRST KATA :</h1> 
<?php

 function longest($a, $b) {
    // concatenate the two string
    $c = $a.$b ;
    // transformed the string in to array of single character
    $arrC = str_split($c , 1);
    // visualize and sort alphabetically the array 
    var_dump(sort($arrC));
    // re-transform the array in to a string with the function that eliminate duplicate element in the array
     $c = implode(array_unique($arrC));
    echo $c;
}
// OTHER SOLUTIONS : 
// function longest($a, $b) {
//     $chars = array_unique(str_split($a . $b));
//     sort($chars);
//     return implode('', $chars);
// }

longest("aretheyhere" , "yestheyarehere" );








?>