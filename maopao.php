<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/10 0010
 * Time: 下午 6:46
 */

$arr =array(13,17,80,32,7,15,3,24);
$length = count($arr);
echo $length;
    for($i = 0;$i < $length;$i++){
    $tmp=0;
        for($j =$i;$j <$length;$j++) {
            if ($arr[$j] < $arr[$i]){   //找出一个最小的,放在第一位$i的位置  下次直接从 $i+1位置开始排
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }

        }
    }
var_dump($arr);