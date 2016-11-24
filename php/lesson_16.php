<?php
/**
 * Created by PhpStorm.
 * User: root
 * 流程控制（嵌套语句的形式）
 */
$username = 'hoilam';
$sex = '男';
if($username == 'hoilam'){
    echo '帐号密码正确允许登录<br/>';
    if($sex == '女'){
        echo '欢迎hoilam女士登录网站';
    }else{
        echo '欢迎hoilam先生登录网站';
    }
}else{
    echo '帐号密码有错';
}