<?php
/*
by simapple
website http://www.simapple.com
 */

set_time_limit(0);
$str = str_pad($str, 512, "0");
$file = fopen("./temp","a+");
$i = 0;
$bytes = 1000000000;
$mygabyte = $bytes/1000000;
echo "test start. waiting ...";
$starttime = time();
while($i < $bytes){
    $i += fwrite($file, $str);
}

$endtime = time();
$usetime = $endtime - $starttime;
$write_xiaolv = $bytes/$usetime;
$myga_xiaolv = $mygabyte/$usetime;
echo "create 1GB file use time ".$usetime." seconds\n";
echo "speed :".$write_xiaolv." byte/s\n";
echo "speed :".$myga_xiaolv." m/s\n";