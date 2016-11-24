<?php
/**
 * Created by PhpStorm.
 * User: root
 * 比较运算符
 **/

var_dump(3>1);
var_dump(3<1);
var_dump(3<=3);
var_dump(3==3);
var_dump(3!=1);
//全等于是要比较数值是否相等而且还要比较类型是否相等
var_dump(3===3);
$a = 'Hello World世界欢迎你';
echo '<hr/>';
echo strpos($a,'W');
echo '<hr/>';
if(strpos($a,'H')!==FALSE){
    echo '我找到了W';
}else{
    echo '没有找到w';
}


