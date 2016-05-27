<?php  
/*var_dump($_POST);*/
$api_url = "http://hospitalsiq.herokuapp.com/search/web/sangu04011994/".$_POST["lat"]."/".$_POST["lon"]."/5";
$res = file_get_contents($api_url);
$json_a = json_decode($res, true);

		//echo nl2br($json_a["result"][$i]["name"]."\n".$json_a["result"][$i]["address"]."\n".$json_a["result"][$i]["category"]."\n".$json_a["result"][$i]["type"]."\n\n");
	
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HospitalsIQ | Home</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        <link rel="stylesheet" href="css/hosp_list.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>


    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('loc'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                alert(mesg);
            });
        });
    </script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('s'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                alert(mesg);
            });
        });
    </script>
    <script type="text/javascript">
    window.fadeIn = function(obj) {
    $(obj).fadeIn(500);
    } 

    </script>


  <script>
         $(function() {
            var availableTutorials = [
               "ActionScript",
               "Boostrap",
               "C",
               "C++",
               "Ecommerce",
               "Jquery",
               "Groovy",
               "Java",
               "JavaScript",
               "Lua",
               "Perl",
               "Ruby",
               "Scala",
               "Swing",
               "XHTML"  
            ];
            $( "#care" ).autocomplete({
               minLength:2,   
               delay:500,   
               source: availableTutorials
            });
         });
  </script>
   



  <style>
    

    .page-top{
        background-color:rgba(0,0,0,0.7);
    }
        


    .navbar-default{
        background-color:rgba(240,240,240,1);
        border-bottom: none;
        margin-bottom: 0 !important;
        border-top:solid rgba(200,200,200,1) 1px;
    }
   


    html,
    body {
        background-image: none;
        background-color: rgba(255,255,255,1);
        height:100%;
        width:100%;
        min-height: auto;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
        background-position: center;
    }



    .text-lines{
      background-color: transparent;
      color: #000;
      outline: none;
      outline-style: none;
      outline-offset: 0;
      border-top: none;
      border-left: none;
      border-right: none;
      border-bottom: solid #000 1px;
    }


    
    .BODY{
      background-color: rgba(200,200,200,1);
    }


    
    #bt{
      position:relative;
      top:-2px;
      left:-20px;
      background-color: rgba(251,201,64,1);
    }


    #btt{
      position: absolute;
      top: -30px;
      width:160px;
      height: 46px;
      padding:2px;
      background-color: rgba(251,201,64,0.5);
      color: black;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }


  </style>


</head>




<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="padding:5px;"><img src="img/hospitalsIQ2.png"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Ping Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    


    

    <div class=" navbar-custom">
      <div class="container-fluid">
        <div class="row" id="top-bar">
          <div class="col-md-1 col-lg-1 hidden-sm hidden-xs">
            <div class="dropdown" >
              <button class="dropbtn" id="btt">  <i class="fa fa-bars" style="color:#fff;"></i> Filters  </button>
              <div class="dropdown-content" style="position: absolute; top:10px; left:0px;" >
                <a href="#">Radiology</a>
                <a href="#">Ambulance</a>
                <a href="#">Emergency</a>
                <a href="#">ATM</a>
              </div>
            </div>
          </div>
          <div class="hidden-lg hidden-md col-sm-3 col-xs-3" ><a href="#" class="slideout-menu-toggle" ><img src="img/filter.png"/></a></div>
          <div class="hidden-lg hidden-md col-sm-3 col-xs-3"><img src="img/loc1.png" id="lo" style="height:28px;width:21px;"/></div>
          <div class="hidden-lg hidden-md col-sm-3 col-xs-3"><img src="img/home_care1.png" id="ca" style="pa height:27px;width:30px;"/></div>
          <div class="col-md-10 hidden-sm hidden-xs">
            <center>
              <input type="text" class="text-lines" id="loc" size="30" placeholder="Enter your location?" />
              <input id="care" class="text-lines" size="30" placeholder="What care you need?">
            </center>
          </div>
          <div class="col-md-1 col-lg-1 hidden-sm hidden-xs">
            <div class="dropdown">
              <button class="dropbtn" >Sort<span class="caret" style="color:white;"></span></button>
              <div class="dropdown-content">
                <a href="#">Distance</a>
                <a href="#">Popularity</a>
              </div>
            </div>
          </div>
          <div class="hidden-lg hidden-md col-sm-3 col-xs-3">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" id="bt" type="button" style="border:none;color:#19a0af; border-radius:0px;" data-toggle="dropdown" ><img src="img/sort.png" style="height:25px;width:23px;padding:1px;"/>
              <span class="caret" style="color:black;"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Distance</a></li>
                <li><a href="#">Popularity</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


 <br/>
 <br/>
 



 <div class="container">
  <div class="row" id="ip">
    <div class="hidden-lg hidden-md col-sm-12 col-xs-12" id="op" style="position:relative; top:80px;">
      <input type="text" class="text-lines" id="s" size="26" placeholder="Enter your location?" />
    </div>
  </div>
  <div class="row" id="ipp">
    <div class="hidden-lg hidden-md col-sm-12 col-xs-12" id="opp" style="position:relative; top:57px;">
      <input type="text" class="text-lines" id="care1" size="26" placeholder="What care you need?" />
    </div>
  </div>
</div>
          



   


<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-9" style="position:relative;top:80px;font-size:20px;font-family:Arial;letter-spacing:2px;text-shadow:1px 1px 2px rgba(0,0,0,0.25);color:rgba(90,90,90,1)"><p>Hospitals at hebbal for cardiology</p></div>
    </div>
  </div>
</section>

   





<div class="wrap">
  <div class="container">
    <div class="row row-gap-small">
      <div class="col-sm-12" id="list" style="positive:relative;top:100px;" > 

      <?php  
        if(strcmp($json_a["status"],"OK") == 0){
          for($i=0;$i<sizeof($json_a["result"]);$i=$i+1){ 
            echo '<div class="row row-gap-medium">
          <div class="col-sm-2"></div>
          <div class="col-sm-2 col-xs-12"><center><img src="img/hosp.png" id="pa" onload="fadeIn(this)" style="display:none;position:relative;top:1px;"/></center></div>
          <div class="col-sm-8 hidden-xs" style="position:relative;left:4%;" >
            <div class="row row-gap-small" >
              <h4>'.$json_a["result"][$i]["name"].'</h4>
            </div>
            <div  class="row row-gap-small"> 
              <p>
                '.$json_a["result"][$i]["address"].'<br/>
                '.$json_a["result"][$i]["category"].'<br/>
                '.$json_a["result"][$i]["type"].'<br/>
              </p>
            </div>
          </div>
          <div class="col-xs-10 hidden-sm hidden-lg hidden-md" style="position:relative;left:4%;" >
            <center><div class="row row-gap-small" >
              <h4>'.$json_a["result"][$i]["name"].'</h4>
            </div>
            <div  class="row row-gap-small"> 
              <p>
                '.$json_a["result"][$i]["address"].'<br/>
                '.$json_a["result"][$i]["category"].'<br/>
                '.$json_a["result"][$i]["type"].'<br/>
              </p>
            </div></center>
          </div>
        
        </div>';
          }
        }else{
          echo '<div class="row row-gap-medium">No result!!</div>';
        } 


      ?>
        
      

      </div>
    </div>
  </div>
</div>

  


<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
   
      $('.slideout-menu-toggle').on('click', function(event){
        event.preventDefault();
        // create menu variables
            var slideoutMenu = $('.slideout-menu');
      var slideoutMenuWidth = $('.slideout-menu').width();
        
        
        // toggle open class
        slideoutMenu.toggleClass("open");
        
        // slide menu
        if (slideoutMenu.hasClass("open")) {
          slideoutMenu.animate({
            left: "0px"
          }); 
        } else {
          slideoutMenu.animate({
            left: -slideoutMenuWidth
          }, 250);  
        }
      });
});
</script>


    

    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>