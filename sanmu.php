<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14 0014
 * Time: 下午 10:05
 */

$a = 5;
$b = 2;
$c = 8;
 maxnum($a,$b,$c);

   function maxnum($a,$b,$c){
   echo ($a >$b)?(($a >$c)?$a:$c):(($b>$c)?$b:$c);
  echo  ($a <$b)?(($a <$c)?$a:$c):(($b<$c)?$b:$c);
}
