<?php
/**
 * Created by PhpStorm.
 * User: root
 * for循环小案例
 */
//1到100的数进行相加 5050，
//1+2+3+4
$sum = 0;
for($i=0;$i<101;$i++){
    $sum = $sum +$i;
}
echo $sum;
//1到100能够被2整除的数，
for($i=1;$i<101;$i++){
    if($i%2 == 0){
        echo '这是能够被2整除的数：'.$i.'<br/>';
    }
}