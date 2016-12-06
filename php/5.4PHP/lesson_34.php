<?php
/**
 * Created by PhpStorm.
 * User: root
 * 变量的作用
 */
//动态的局部变量
function text(){
    $i = 1;
    $j = 3;
    echo $i + $j;
}
text();
echo '<hr/>';

//echo $i + $j;

function text1(){
    $i =1;
    echo $i.'<br/>';
    $i++;
}

text1();
text1();
text1();
text1();

echo '<hr/>';
//静态局部变量
function text2(){
    static $i = 1;
    echo $i.'<br/>';
    $i++;
}
text2();
text2();
text2();














