<?php
/*
 * 常量
 *
 * */
    echo PHP_VERSION; //输出版本
    echo '<hr/>';

    echo PHP_OS;  //输出系统
    echo '<hr/>';

    echo M_PI;  //
    echo '<hr/>';

    define('Hello World','hoilam');
    echo '<hr/>';

    const Hoilam = 'php学习';
    echo Hoilam;

    echo '<hr/>';
    echo constant('Hoilam');

    echo '<hr/>';
    var_dump(defined('小明'));