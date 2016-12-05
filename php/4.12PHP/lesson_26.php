<?php
/**
 * Created by PhpStorm.
 * User: root
 * 二维数组
 */
echo '<pre>';
$arr = array(
    array(
        1,
        5.5,
        'clive',
        true
    ),array(
        2,
        6.6,
        'PHP世界',
        false
    )
);
print_r($arr);
echo $arr[0][2];
echo '<hr/>';

$arr1[] = array(
    1,
    5.5,
    'clive',
    true
);
$arr1[] = array(
    'id'=>0,
    'username'=>'hoilam',
    'password'=>123456,
    'addr'=>'广州'
);

print_r($arr1);
echo '<hr/>';

echo $arr1[1]['username'].'<br/>';
echo $arr1[1]['password'];








