<?php
  header("content-type:text/html;charset=utf-8");
//日历calendar
 $year = $_GET['y']?$_GET['y']:date('Y');//date()函數獲取年月時間等信息  大小寫獲取的信息不一樣
 $month = $_GET['m']?$_GET['m']:date('m');//獲取當前月份
 $days = date('t',strtotime("{$year}-{$month}-1"));     //獲取當前月份的總天數；指定月份 即可,不用指定哪一天
 $week =date('w',strtotime("{$year}-{$month}-1"));    //获取当前一号是周几

echo $year;
echo "<br>";
echo $month;
echo "<br>";
echo $days;
echo "<br>";
echo $week;
echo "<br>";
echo date('Y-m-d H:i:s');   //现在的时间
echo "<br>";
echo date('Y-m-d H:i:s',strtotime('-1 day',time()));   //一天前的时间
echo "<br>";
echo date('Y-m-d H:i:s',strtotime('-1 week',time()));//一周前的时间
echo "<br>";
echo date('Y-m-d H:i:s',strtotime('-1 month',time()));//一月前的时间
//所有内 容居中显示
echo "<center>";
echo "<h2> {$year}年{$month}月</h2>";
//输出表格日期
echo "<table width='700'border='1'>";
echo "<tr>";
echo "<th>周日</th>";
echo "<th>周一</th>";
echo "<th>周二</th>";
echo "<th>周三</th>";
echo "<th>周四</th>";
echo "<th>周五</th>";
echo "<th>周六</th>";
echo "</tr>";



//绘制表格
for($i = 1-$week;$i <= $days;){     //如果1号是星期三那么$=1-3=-2   排列后值为(-2)(-1)(0)(1)(2)(3)(4)
    echo "<tr>";
    for($j = 0;$j < 7;$j++){
        if($i > $days|| $i < 1){
            echo "<td>&nbsp;</td>";
        }else{
        echo "<td>{$i}</td>";}
        $i++;
    }
    echo "</tr>";
}
//获取上一年上一月
if($month==1){
    $prevyear = $year-1;
    $prevmonth = 12;
}else{
    $prevyear = $year;
    $prevmonth = $month-1;
}
//获取下一年下一月
if($month==12){
    $nextyear = $year+1;
    $nextmonth = 1;
}else{
    $nextyear = $year;
    $nextmonth = $month+1;

}


//上月下月按钮


echo "<h2><a href='calendar%202.php?y={$prevyear}&m={$prevmonth}'>上一月</a>||<a href='calendar%202.php?y={$nextyear}&m={$nextmonth}'>下一月</a></h2>";

echo"</table>";
echo "</center>";











