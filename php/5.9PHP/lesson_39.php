<?php
/**
 * Created by PhpStorm.
 * User: root
 * 包含文件
 */
function text1(){

}
echo '<hr/>';
require 'newfile.php';
//require 引用文件出错的时候 是一个报错一个警告
//include 引用文件出错的时候 是两个警告
require 'newfile1.php';

echo $i;

echo '</pre>';