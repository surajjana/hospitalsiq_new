<?php  

$data = file_get_contents("http://hospitalsiq.herokuapp.com/search/web/surajjana/13.0357695/77.59702219999997/".$_GET['dept']."/10");

$data = json_decode($data, true);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hospitals IQ | Symptoms Home</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <style type="text/css">

        #list_btn{
            width: 30px;
            height: 30px;
            float: right;
            background-color: #fafafa;
            border: none;
            border-radius: 50%;
            position: relative;
            top: -55px;
            left: -50px;
            box-shadow: 0 1px 2px;
        }

        #map_btn{
            width: 30px;
            height: 30px;
            float: right;
            background-color: #fafafa;
            border: none;
            border-radius: 50%;
            position: fixed;
            box-shadow: 0 1px 2px;
            top: 600px;
            right: 200px;
        }

        #map_btn_mob{
            width: 30px;
            height: 30px;
            float: right;
            background-color: #fafafa;
            border: none;
            border-radius: 50%;
            position: fixed;
            box-shadow: 0 1px 2px;
            top: 500px;
            right: 15px;
        }

    </style>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var contentstring = [<?php for($i=0;$i<sizeof($data["result"]);$i++){if($i == sizeof($data["result"])-1){echo '"'.$data["result"][$i]["name"].'"';}else{echo '"'.$data["result"][$i]["name"].'",';}} ?>];
        var regionlocation = [<?php for($i=0;$i<sizeof($data["result"]);$i++){if($i == sizeof($data["result"])-1){echo '"'.$data["result"][$i]["latitude"].', '.$data["result"][$i]["longitude"].'"';}else{echo '"'.$data["result"][$i]["latitude"].', '.$data["result"][$i]["longitude"].'",';}} ?>];
        var markers = [];
        var iterator = 0;
        var areaiterator = 0;
        var map;
        var infowindow = [];
        geocoder = new google.maps.Geocoder();
        
        $(document).ready(function () {
            setTimeout(function() { initialize(); }, 400);

            $('#list_btn').click(function(){
                $('#map').css("display", "none");
                $('#list').css("display", "block");
                console.log('List Switch Button Clicked...');
            });
            $('#map_btn').click(function(){
                $('#list').css("display", "none");
                $('#map').css("display", "block");
                console.log('Map Switch Button Clicked...');
            });
            $('#map_btn_mob').click(function(){
                $('#list').css("display", "none");
                $('#map').css("display", "block");
                console.log('Map Switch Button Clicked...');
            });
        });
        
        function initialize() {           
            // infowindow = [];
            // markers = [];
            //GetValues();
            /*iterator = 0;
            areaiterator = 0;*/
            region = new google.maps.LatLng(13.0357695,77.59702219999997);
            /*console.log(region.lat());*/
            map = new google.maps.Map(document.getElementById("Map"), { 
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: region,
            });
            drop();
        }
               
        function drop() {
            for (var i = 0; i < contentstring.length; i++) {
                setTimeout(function() {
                    addMarker();
                }, 800);
            }
        }

        function addMarker() {
            var address = contentstring[areaiterator];
            var icons = './img/hiq_map_marker.png';
            var templat = regionlocation[areaiterator].split(',')[0];
            var templong = regionlocation[areaiterator].split(',')[1];
            var temp_latLng = new google.maps.LatLng(templat, templong);
            markers.push(new google.maps.Marker(
            {
                position: temp_latLng,
                map: map,
                icon: icons,
                draggable: false
            }));            
            iterator++;
            info(iterator);
            areaiterator++;
        }

        function info(i) {
            infowindow[i] = new google.maps.InfoWindow({
                content: contentstring[i - 1]
            });
            infowindow[i].content = contentstring[i - 1];
            google.maps.event.addListener(markers[i - 1], 'click', function() {
                for (var j = 1; j < contentstring.length + 1; j++) {
                    infowindow[j].close();
                }
                infowindow[i].open(map, markers[i - 1]);
            });
        }
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
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <h4>Department : <?php echo $_GET['dept']; ?></h4>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row" id='map'>
        <div class="col-md-1"></div>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <div id="Map" style="width: 100%;height: 500px;"></div>
            <button id="list_btn"><i class="fa fa-bars fa-1x" style="color: #545454;"></i></button>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row" id='list' style="display:none;"> 
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div id="List" style="width: 100%;">
                <?php  
                if(strcmp($data["status"],"NA") != 0){
                    for($i=0;$i<sizeof($data["result"]);$i++){
                        echo '<div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <center>
                                        <img src="img/hosp.png" style="width:60%;">
                                    </center>
                                </div>
                                <div class="col-md-8 hidden-sm hidden-xs">
                                    <h4>'.$data["result"][$i]["name"].'</h4>
                                    <p>'.$data["result"][$i]["address"].'</p>
                                </div>
                                <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                                    <center>
                                        <h4>'.$data["result"][$i]["name"].'</h4>
                                        <p>'.$data["result"][$i]["address"].'</p>
                                    </center>
                                </div>
                            </div>
                            <br />';
                    }
                }?>
            </div>
            <div class="row">
                <div class="col-md-12 hidden-sm hidden-xs">
                    <button id='map_btn'><i class="fa fa-map"></i></button>
                </div>
                <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                    <button id='map_btn_mob'><i class="fa fa-map"></i></button>
                </div>
            </div>
            <!-- <button id='map_btn'><i class="fa fa-map"></i></button> -->
        </div>
        <div class="col-md-2">
            <!-- <button id='map_btn'><i class="fa fa-map"></i></button> -->
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</body>
</html>
