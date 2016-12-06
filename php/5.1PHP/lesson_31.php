<?php
/**
 * Created by PhpStorm.
 * User: root
 * 函数
 */
$string = 'abcde';
$string = 'HelloWorld欢迎你';
//GBK编码格式下一个中文是2个字符、在UTF-8编码格式下一个中文是3个字符
echo strlen($string);
echo '<hr/>';
$str = 'abcde';
echo ucfirst($str);
echo '<hr/>';
echo md5($str);
echo '<hr/>';
$str = 'abcde';
echo strrev($str);