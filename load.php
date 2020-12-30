<?php

//get server loads
$loadresult = @exec('uptime');
preg_match("/averages?: ([0-9\.]+),[\s]+([0-9\.]+),[\s]+([0-9\.]+)/",$loadresult,$avgs);

//get server uptime
$uptime = explode(' up ', $loadresult);
$uptime = explode(',', $uptime[1]);
$uptime = $uptime[0].', '.$uptime[1];
$data .= "Server $avgs[1], $avgs[2], $avgs[3]";
$data .= ". $uptime";

echo $data;
?>
