<?php
/**
 * Created by PhpStorm.
 * User: root
 *
 *  1*1=1;
 *  1*2=2 2*2=4
 */
for($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j.'*'.$i.'='.($i*$j)."\t";
    }
    echo '<br/>';
}