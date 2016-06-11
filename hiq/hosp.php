<?php  

$data = file_get_contents("http://hospitalsiq.herokuapp.com/search/web/surajjana/".$_POST['lat']."/".$_POST['lon']."/".urlencode($_POST['symp_id'])."/5");

$data = json_decode($data, true);

?>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hospitals IQ | Showing Hospitals Near <?php echo $_POST['addr_info'].' | '.$data['department']; ?></title>

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
	<br />
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 col-sm-12 col-xs-12">
			<h3>Showing Hospitals Near <?php echo $_POST['addr_info']; ?></h3>
			<h4>Department : <?php echo $data["department"]; ?></h4>
		</div>
		<div class="col-md-2"></div>
	</div>
	<br />
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php  
				if(strcmp($data["status"],"NA") != 0){
					for($i=0;$i<sizeof($data["result"]);$i++){
						echo '<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<center>
										<a href="detail.php?id='.$data["result"][$i]["id"].'"><img src="img/hosp.png" style="width:60%;"></a>
									</center>
								</div>
								<div class="col-md-8 hidden-sm hidden-xs">
									<a href="detail.php?id='.$data["result"][$i]["id"].'"><h4>'.$data["result"][$i]["name"].'</h4></a>
									<p>'.$data["result"][$i]["address"].'</p>
								</div>
								<div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
									<center>
										<a href="detail.php?id='.$data["result"][$i]["id"].'"><h4>'.$data["result"][$i]["name"].'</h4></a>
										<p>'.$data["result"][$i]["address"].'</p>
									</center>
								</div>
							</div>
							<br />';
					}
				}else{
					echo '<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<center>
										<h4>No Hospitals Found... :-(</h4>
									</center>
								</div>
							</div>';
				}
			?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
</body>
</html>