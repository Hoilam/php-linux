<?php
/**
 * Created by PhpStorm.
 * User: root
 *
 *  *
 *  **
 *  ***
 *  ****
 *  *****
 *
 */
//1.$i=0;$j=0;*;
//2.$i=1;$j=0;**;
for($i=0;$i<6;$i++){
    for($j=0;$j<=$i;$j++){
        echo '*';
    }
    echo '<br/>';
}
echo '<hr/>';

for($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j.'*'.$i.'='.($i*$j)."\t\t";
    }
    echo '<br/>';
}