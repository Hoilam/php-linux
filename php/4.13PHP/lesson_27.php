<?php
/**
 * Created by PhpStorm.
 * User: root
 * 遍历数组
 */
echo '<pre>';
$arr = array(
  1,2,3,4,5,
    'username'=>'hoilam',
    'password'=>123456,
    'age'=>27
);
print_r($arr);
echo '<hr/>';
foreach($arr as $key=>$val){
    echo '数组的键名为：'.$key.',数组的键值为：'.$val.'<br/>';
}
echo '<hr/>';
$arr1[] = array(
    'id'=>0,
    'username'=>'hoilam',
    'password'=>1,
    'age'=>1
);
$arr1[] = array(
    'id'=>1,
    'username'=>'hoilam1',
    'password'=>3,
    'age'=>2
);
$arr1[] = array(
    'id'=>2,
    'username'=>'hoilam2',
    'password'=>3,
    'age'=>3
);
print_r($arr1);
echo '<hr/>';
foreach ($arr1 as $key=>$val){
    echo '数组的键名为：'.$key.',数组的键值为：'.$val.'<br/>';
}
echo '</pre>';





