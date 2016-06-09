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

	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

	

	<script type="text/javascript">

	$(document).ready(function(){

		google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('loc'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                console.log("Latitude : "+latitude);
                console.log("Longitude : "+longitude);
                document.getElementById("lon").value = longitude;
                if(places!='\0')
                {
                    $('#addr').text(address);
                    $('#addr_info').val(address);
                    $('#lat').val(latitude);
                    $('#lon').val(longitude);
                    $("#location").hide();
                    $('#general_info').css('display', 'block');
                }
            });
        });
	});

	</script>

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

	<div class="row" id="location" style="margin-top:100px;">
		<div class="col-md-2"></div>
		<div class="col-md-8 col-sm-12 col-xs-12">
			<center>
				<input type="text" name="loc" id="loc" size="30">
			</center>
		</div>
		<!-- <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
			<center>
				<input type="text" name="loc_m" id="loc_m" size="25">
			</center>
		</div> -->
		<div class="col-md-2"></div>
	</div>


	<div class="row" id="general_info" style="margin-top:100px;display:none;">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
				 <form role="form" action="data.php" method="post">
				 	<div class="form-group">
						<label>Location:</label><br />
					    <label id="addr"></label>
					    <input type="hidden" id="addr_info" name="addr_info" value="">
					    <input type="hidden" id="lat" name="lat" value="">
					    <input type="hidden" id="lon" name="lon" value="">
					</div>
					<div class="form-group">
						<label>Gender:</label><br />
					    <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
						<label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
					</div>
					<div class="form-group">
						<label>Age Range:</label>
						<select class="form-control" id="age" name="age">
							<option value="0_0">Select Age Range</option>
							<option value="0_2">0 to 2 years</option>
							<option value="3_6">3 to 6 years</option>
							<option value="7_12">3 to 12 years</option>
							<option value="13_17">13 to 17 years</option>
							<option value="18_24">18 to 24 years</option>
							<option value="25_34">25 to 34 years</option>
							<option value="35_44">35 to 44 years</option>
							<option value="45_54">45 to 54 years</option>
							<option value="55_64">55 to 64 years</option>
							<option value="65_plus">65+ years</option>
						</select>
					</div>
					<div class="form-group">
						<label>Body Part:</label>
						<select class="form-control" id="body_part_id" name="body_part_id">
							<option value="0">Select Body Part</option>
							<!-- <option value="1"></option> -->
							<option value="2">Scalp</option>
							<option value="3">Eyes</option>
							<option value="4">Ears</option>
							<option value="5">Face</option>
							<option value="6">Nose</option>
							<option value="7">Mouth</option>
							<option value="8">Jaw</option>
							<!-- <option value="9"></option> -->
							<option value="10">Neck Front</option>
							<!-- <option value="11"></option> -->
							<option value="12">Neck Back</option>
							<!-- <option value="13"></option> -->
							<option value="14">Chest</option>
							<option value="15">Sternum</option>
							<option value="16">Arm pit</option>
							<!-- <option value="17"></option> -->
							<option value="18">Lateral Chest</option>
							<!-- <option value="19"></option> -->
							<option value="20">Entire Abdomen</option>
							<!-- <option value="21"></option> -->
							<option value="22">Upper Abdomen</option>
							<!-- <option value="23"></option> -->
							<option value="24">Lower Abdomen</option>
							<!-- <option value="25"></option> -->
							<option value="26">Back</option>
							<option value="27">Upper Spine</option>
							<!-- <option value="28"></option>
							<option value="29"></option> -->
							<option value="30">Lower Spine</option>
							<!-- <option value="31"></option> -->
							<option value="32">Pelvis</option>
							<!-- <option value="33"></option> -->
							<option value="34">Groin</option>
							<option value="35">Genitals</option>
							<!-- <option value="36"></option> -->
							<option value="37">Buttock</option>
							<!-- <option value="38"></option>
							<option value="39"></option> -->
							<option value="40">Entire Arm</option>
							<option value="41">Shoulder</option>
							<option value="42">Upper Arm Bicep</option>
							<option value="43">Upper Arm Tricep</option>
							<option value="44">Elbow</option>
							<option value="45">Forearm Flexor</option>
							<option value="46">Forearm</option>
							<option value="47">Wrist</option>
							<option value="48">Hand</option>
							<option value="49">Palm</option>
							<option value="50">Fingers</option>
							<!-- <option value="51"></option> -->
							<option value="52">Entire Leg</option>
							<option value="53">Hid</option>
							<option value="54">Thigh</option>
							<option value="55">Hamstring</option>
							<option value="56">Knee</option>
							<option value="57">Back of knee</option>
							<option value="58">Shin</option>
							<option value="59">Calf</option>
							<option value="60">Ankle</option>
							<!-- <option value="61"></option> -->
							<option value="62">Foot</option>
							<option value="63">Sole</option>
							<option value="64">Toes</option>
							<!-- <option value="65"></option>
							<option value="66"></option>
							<option value="67"></option> -->
							<option value="68">Skin</option>
						</select>
					</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
			
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>