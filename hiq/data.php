<?php  
require_once('getDept.php');

$data = file_get_contents('http://hospitalsiq.herokuapp.com/symptoms/'.$_POST['gender'].'/'.$_POST['age'].'/'.$_POST['body_part_id']);
$json_data = json_decode($data, TRUE);
/*for($i=0;$i<sizeof($json_data);$i++){
	echo '<li>'.$json_data[$i]["name"].'</li>';
}*/
?>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hospitals IQ | Symptoms Home</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<script type="text/javascript" src="js/event.js"></script>
</head>
<body>
<div class="container" style="margin-top:25px;">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<center>
				<img src="img/hIQ_logo.png" style="width:60%;">
			</center>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row" style="">
		<div class="col-md-6 hidden-sm hidden-xs">
			<center><h2>Symptoms</h2></center>
		</div>
		<div class="col-md-6 hidden-sm hidden-xs">
			<center><h2>Conditions</h2></center>
		</div>

		<div class="col-sm-6 col-xs-6 hidden-md hidden-lg">
			<center><h4>Symptoms</h4></center>
		</div>
		<div class="col-sm-6 col-xs-6 hidden-md hidden-lg">
			<center><h4>Conditions</h4></center>
		</div>
	</div>
	<div class="row" style="margin-top:30px;word-wrap: break-word;">
		<div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:15px;padding-right:15px; ">
			<?php  
				for($i=0;$i<sizeof($json_data);$i++){
					echo '<button class="btn btn-info btn-block" id="btn_'.(string)($i+1).'" onClick="$(this).Show(\''.($i+1).'\',\''.sizeof($json_data).'\');" style="white-space:normal;">'.$json_data[$i]["name"].'</button><br />';
				}
			?> 
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<?php  
				/*for($i=0;$i<sizeof($json_data);$i++){
					$res = '<div id="'.(string)($i+1).'" style="display:none;">';
					for($j=0;$j<sizeof($json_data[$i]["conditions"]);$j++){
						$res += '<button class="btn btn-warning btn-block">'.$json_data[$i]["conditions"][$j]["cname"].'</button>';
					}
					$res += '</div>';
					echo $res;
				}*/
				for($i=0;$i<sizeof($json_data);$i++){
					echo '<div id="'.(string)($i+1).'" style="display:none;">';
					for($j=0;$j<sizeof($json_data[$i]["conditions"]);$j++){
						if(strlen($json_data[$i]["conditions"][$j]["cname"]) != 0){
							
							$obj = new getDept;

							$obj->setData($json_data[$i]["conditions"][$j]["cname"]);

							$dept = $obj->get_the_dept();
							
							echo '<button class="btn btn-warning btn-block" id="btn_'.(string)($i+1).'_'.(string)($j+1).'" name="'.$json_data[$i]["conditions"][$j]["cname"].'" style="white-space:normal;" onClick="$(this).Symp(\''.($i+1).'\',\''.($j+1).'\',\''.sizeof($json_data[$i]["conditions"]).'\');">'.$json_data[$i]["conditions"][$j]["cname"].' | '.$dept.' Department</button>';
						}
					}
/*					echo '<button  class="btn btn-success btn-block" id="btn_'.(string)($i+1).'_submit" style="display:none;">Submit</button>';
*/					echo '</div>';
				}
			?>
			<form action="hosp.php" method="post">
				<input type="hidden" name="symp_id" id="symp_id" value="">
				<input type="hidden" name="addr_info" value="<?php echo $_POST['addr_info']; ?>">
				<input type="hidden" name="lat" value="<?php echo $_POST['lat']; ?>">
				<input type="hidden" name="lon" value="<?php echo $_POST['lon']; ?>">
				<button type="submit" class="btn btn-success btn-block" id="btn_submit" style="margin-top:15px;display:none;">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>