<?php  
/*var_dump($_POST);*/
$api_url = "http://hospitalsiq.herokuapp.com/search/web/sangu04011994/".$_POST["lat"]."/".$_POST["lon"]."/5";
$res = file_get_contents($api_url);

$json_a = json_decode($res, true);

if(strcmp($json_a["status"],"OK") == 0){
	for($i=0;$i<sizeof($json_a["result"]);$i=$i+1){
		echo nl2br($json_a["result"][$i]["name"]."\n".$json_a["result"][$i]["address"]."\n".$json_a["result"][$i]["category"]."\n".$json_a["result"][$i]["type"]."\n\n");
	}
}
else{
	echo "No hospitals here :(";
}
?>