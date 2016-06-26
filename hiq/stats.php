<?php 

$fd = fopen("stats.json", "r");
$json_data = fread($fd, filesize("stats.json"));
$json_data = json_decode($json_data, true);

/*$val = array("ip"=>"8.8.8.8","time"=>"");
array_push($json_data,$val);*/

$ip_addr = $_SERVER['REMOTE_ADDR'];

echo $ip_addr;


/*$details = json_decode(file_get_contents("http://ipinfo.io/".$ip_addr."json"), ture);

$val = array("ip" => $details["ip"],
				"hostname" => $details["hostname"],
				"city" => $details["city"],
				"region" => $details["region"],
				"country" => $details["country"],
				"loc" => $details["loc"],
				"org" => $details["org"],
				"postal" => $details["postal"],
				"time" => time());
array_push($json_data,$val);

$res = json_encode($json_data);

$fl = fopen("stats.json", "w");
fwrite($fl,$res);
echo $res;*/
?>