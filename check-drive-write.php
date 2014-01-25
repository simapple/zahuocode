<?php
set_time_limit(0);
$str =  "";
$str = str_pad($str, 512, "0");
echo strlen($str)."\n";
$file = fopen("./temp","a+");
$i = 0;
$starttime = time();
$bytes = 10000000;
$mygabyte = $bytes/1000;
while($i < $bytes){
    $i += fwrite($file, $str);
}
$endtime = time();
$usetime = $endtime - $starttime;
$write_xiaolv = $bytes/$usetime;
$myga_xiaolv = $mygabyte/$usetime;
echo "create 1GB file use time ".$usetime." seconds\n";
echo "xiaolv :".$write_xiaolv." byte/s\n";
echo "xiaolv :".$myga_xiaolv." m/s\n";