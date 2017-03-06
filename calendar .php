<?php
  header("content-type:text/html;charset=utf-8");
//日历calendar
$date = 31;
echo "<table width='700'border='1'>";

for($i = 1;$i <= $date;){
    echo "<tr>";
    for($j = 0;$j < 7;$j++){
        if($i <=$date){
        echo "<td>{$i}</td>";
        $i++;
        }else{
            echo "<td>&nbsp;</td>";
        }


    }
    echo "</tr>";

}











