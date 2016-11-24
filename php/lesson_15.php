<?php
/**
 * Created by PhpStorm.
 * User: root
 * PHP流程控制
 */
//这是if的第一种写法
if(false)
    echo 'PHP代码世界欢迎你<hr/>';
    echo 'PHP代码世界欢迎你<hr/>';
    echo 'Hello World';

//if的第二种写法
$a = 3;
if($a>1){
    echo 'Hello World<hr/>';
    echo 'hello World<hr/>';
}

//if的第三种写法
$username = 'hoilam';
if($username == 'hoilam'){
    echo '真的时候执行的代码';
}else{
    echo '假的时候执行的代码';
}
echo '<hr/>';
//if的第四种写法
$username = 'hello world';
if($username == 'hello world'){
    echo '学习PHP代码';
}elseif($username == 'world'){
    echo '不学习PHP代码';
}else{
    echo 'hoilam';
}