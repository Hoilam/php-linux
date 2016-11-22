<?php
    $a = true+1;
    echo $a,'<br/>';    //2

    $b = false + 1;
    echo  $b,'<br/>';   //1

    $str = 1 + 'abcd';
    echo $str,'<br/>';  //1

    $str = 1 + '9999abcd'; //10000
    echo $str, '<br/>';

    $str = 1 + '9a9b9c9d';  //10
    echo $str,'<br/>';

    echo 'hello world世界欢迎你',null,'这是真的','<br/>';

    $arr = Array();
    echo $arr,'<br/>';
    $handle = fopen('lesson_4.php','r');
    echo $handle,'<br/>';

    /*
     * if(如果这里为真){
     *  就会执行这里的代码
     *  }else{
     *     如果为假就会执行这里的代码
     * }
     *
     * */

    $sum = null;
    if($arr){
        echo 'Hello World';
    }else{
        echo 'Not Hello World';
    }
