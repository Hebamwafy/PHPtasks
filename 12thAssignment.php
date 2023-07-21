<?php
echo "---------------task 1--------------------<br>";
date_default_timezone_set("Asia/Riyadh");
$d = date_create("", timezone_open("Asia/Riyadh"));
echo date_format($d, "D, d-M-y : h:i:s A")."<br>";
echo date_format($d, "l, d-F-Y : h:i:s A")."<br>";

echo "---------------task 2--------------------<br>";
$date= "2005-10-02";
$d =date_create($date) ;
date_default_timezone_set("Africa/Cairo")."<br>";
 echo date_default_timezone_get(); 
 date_modify($d, "+15 hours, +15 minutes, +15 seconds");
 echo date_format($d, "Y, F, l 'dS' H:i:s") . "<br>";

 echo "---------------task 3--------------------<br>";
 $date = "1990-10-01";
 $old_date= strtotime("1990-10-01"); //turn the format of the date into unixtime format 
 date_default_timezone_set("Africa/Cairo")."<br>";
 $days= round((time()-$old_date)/60/60/24 ,2);
 $years=round((time()-$old_date)/60/60/24/365 , 2);
 echo"From Epoch Time Till 1990-10-01 Is Approximately ".$days."Days<br>";
 echo"From Epoch Time Till 1990-10-01 Is Approximately ".$years."Years<br>";

 echo "---------------task 4--------------------<br>";
date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$d=date_create($date);
$now= date_create("now");
$diff = date_diff($d, $now);

echo " From Epoch Time Till 1990-10-01 Is Approximately " . $diff->d . " Days<br>";
echo " From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y . " Years<br>";

echo "---------------task 5--------------------<br>";
date_default_timezone_set("Africa/Cairo");
//method 1
print_r(getdate()[0]) ;
echo "<br>";

//method 2
$date = date_create();
echo date_timestamp_get($date) . "<br>";

//method 3
echo time();