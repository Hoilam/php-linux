<?php
/**
 * Created by PhpStorm.
 * User: root
 * 传值和传引用的区别
 */
function text($i){
    $i = 'holiam';
    echo $i;
}
text(123);
echo '<hr/>';
$m = 123;
text($m);
echo '<hr/>';
echo $m;
echo '<hr/>';

function text2(&$i){
    $i = 'Clive';
    echo $i;
}
$m = 123;
text2($m);

echo '<hr/>';
echo $m;
echo '<hr/>';

$a = 'hoilam';
echo md5($a);
echo '<hr/>';

$username = 'md5';
echo $username('clive');










