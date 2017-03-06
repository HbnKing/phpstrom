<?php
  header("content-type:text/html;charset=utf-8");
//递归函数
    $num = 95;
    function sum($num){
        static $tot; //定义一个静态变量  static $a = 0;静态变量如果没设置初始值那么晚他的初始值为零；
        if($num>=1){
            $tot+=$num; //$tot=$tot+$num;
            return sum(--$num);
        }else{
            return $tot;
        }
    }
echo sum($num);


/*PHP 中当函数调用层数超过限制的时候就会出现 Maximum function nesting level of ‘100’ reached
默认情况下函数嵌套不能超过 100 层
我们可以通过修改配置文件来解决此问题

修改 php.ini添加
xdebug.max_nesting_level=600*/








