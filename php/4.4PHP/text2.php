<?php
/**
 * Created by PhpStorm.
 * User: root
 * for循环嵌套
 */
//for循环里面如果有for循环，外层循环执行一次，内存循环执行一遍
for($i=0;$i<3;$i++){
    echo '这里是$i循环的次数：'.$i.'<br/>';
    for($j=0;$j<4;$j++){
        echo'这里是$j循环的次数：'.$j.'<br/>';
    }
    echo '<hr/>';

}
echo '<hr/>';