<?php
/**
 * Created by PhpStorm.
 * User: root
 * 回调函数的形式
 */
function text1(){
    echo '这是text1';
}
function text2($username){
    echo '这个是text2'.'<br/>'.'这里是username的值：'.$username;
}
//回调函数：函数体内的名称是我们传入的参数();
function callBack($call,$str){
    $call($str);
}
//回调函数的使用就是传入的参数是你想要回调的函数名称
callBack('text2','小明');
echo '<hr/>';
call_user_func('text2','测试');