<?php
/**
 * Created by PhpStorm.
 * User: root
 * 可变参数形式
 */
//function text(){
//
//}
//text();
$str = function(){
    echo '这里是匿名函数';
};
$str();
echo '<hr/>';
$str1 = function ($username){
    echo '这里是有参数的匿名函数';
    echo $username;
};
$str1('hoilam');
echo '<hr/>';
$str2 = function ($username){
    return $username;
};
echo $str2('helloworld');
echo '<hr/>';

/*
func_num_args();
func_get_arg();*/

function text(){
    echo func_num_args();
    echo '<hr/>';
    echo func_get_args(0);
    echo '<hr/>';
    print_r(func_get_args());
}

text('hoilam','12306','广州');