<?php
$arr = array(
    0 => 'a',
    1 => array('a', 'b', 'c'),
    2 => 'b',
    3 => array('a', 'b', 'c'),
    4 => 'c'
);
$it = new RecursiveArrayIterator($arr);
$Rit = new RecursiveIteratorIterator($it);
print_r(iterator_to_array($Rit, false));