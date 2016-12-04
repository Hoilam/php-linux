<?php
/**
 * Created by PhpStorm.
 * User: root
 * $arr = array();
 * var_dump($arr);
 * 索引数组下标是从数字开始的
 */
$arr = array(
    1,
    5.5,
    false,
    '小明'
);
print_r($arr);
echo '<hr/>';
//array(key=>value,key=>value....)
$arr1 = array(
    5=>'clive',
    6=>12,
    9=>false,
    4=>4.4
);
print_r($arr1);
echo '<hr/>';

//关联数组，下标是字符串
//username可以称呼为我们的键名,
//我们的键名所对应的值就是键值

$arr2 = array(
    'username'=>'clive',
    'password'=>123456,
    'age'=>27
);
print_r($arr2);
echo '<hr/>';

//索引+关联混合使用
$arr3 = array(
    1,2,3,4,5,
    'username'=>'hoilam',
    'addr'=>'广州'
);
print_r($arr3);
echo '<hr/>';

$arr3['username'] = 'clive';
print_r($arr3);














