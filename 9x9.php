<?php
      header("content-type:text/html;charset=utf-8");
//递归函数


   for($i = 1;$i <= 9;$i++){
    for($j = 1;$j <= $i;$j++){
        echo "$i*$j =".$i*$j;
        echo "&nbsp;";
    }    echo "<br>";

}


