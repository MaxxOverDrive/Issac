<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>So Much Good</title>

<!--<link rel="preload" href="https://somuchgood.org/img/favicon.png" as="image">-->

<link rel="icon" href="https://somuchgood.org/img/favicon.png">
<link rel="shortcut icon" href="https://somuchgood.org/img/favicon.png">
<link rel="apple-touch-icon" sizes="64X64" href="https://somuchgood.org/img/favicon.png">
<!--<link rel="apple-touch-icon-precomposed" href="https://somuchgood.org/img/favicon.png">-->
<link rel="apple-touch-icon" href="https://somuchgood.org/img/favicon.png">

<link rel="apple-touch-startup-image" href="https://somuchgood.org/img/favicon.png">

<!-- Size for iPhone and iPod touch - 57 x 57 (in pixels) -->
<link rel="apple-touch-icon" href="https://somuchgood.org/img/favicon.png">
<!-- Size for high-resolution iPhone and iPod touch - 114 x 114 (in pixels) -->
<link rel="apple-touch-icon" sizes="114x114" href="https://somuchgood.org/img/favicon.png">
<!-- Size for iPad - 72 x 72 (in pixels) -->
<link rel="apple-touch-icon" sizes="72x72" href="https://somuchgood.org/img/favicon.png">
<!-- Size for high-resolution iPad - 144 x 144 (in pixels) -->
<link rel="apple-touch-icon" sizes="144x144" href="https://somuchgood.org/img/favicon.png">

<link href="css/bootstrap.css" type="text/css" >
<link href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/sweetalert.css">
   <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <link href="Style.css" rel="stylesheet" type='text/css'>
  <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
<link rel="stylesheet" type="text/css" href="main.css">
<link href="css/styles.css">

</head>

<body>

<div class="row navrow" style="border-bottom:1px solid #fbc961; margin:0;    background-color: white;">

<nav class="navbar cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2" >
 
  <div class="container">
  
  	<div class="col-sm-3 forset">
    
    	<a class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo"></a>
      
    </div>
  
    <div class="col-sm-9">
    <div class="navbar-header" style="margin-left:15%">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id="showRight">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-center header" style="color:#74787B">
       
        <li class="dropdown mobileview" style="color:#74787B">
          <a  href="search_results.php"> SEARCH</a>
                  </li>
        <li class="dropdown mobileview" style="color:#74787B">
          <a href="community.php"><i class="fa fa-commenting showicon"></i> COMMUNITY</a>
         
        </li>
        
        <li class="mobileview" style="color:#74787B"><a href="videos.php"><i class="fa fa-crosshairs showicon"></i> VIDEO</a></li>
         
        
    <li class="dropdown mobileview">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users showicon"></i> SHOP<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <!--<li><a href="#">SMG Shop</a></li>-->
            <li><a href="vendors.php">Vendors</a></li>
            <li><a href="become_sponsers.php">Publish your banner</a></li>
                     
          </ul>
        </li>
        
         <li class="dropdown mobileview">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users showicon"></i> ABOUT US<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="page.php?page_id=12&nitir=jggggkl">About Us</a></li><li><a href="page.php?page_id=10&nitir=jggggkl">Ambassadors </a></li><li><a href="page.php?page_id=13&nitir=jggggkl">Post Restrictions </a></li><li><a href="page.php?page_id=2&nitir=jggggkl">Privacy Policy and Terms</a></li>            
            <!--<li><a href="#">Media</a></li>
            <li><a href="#">Ambassadors</a></li>
             <li><a href="#">Partners</a></li>-->
             
            
          </ul>
        </li>
        <li class="mobileview"><a href="contact.php">
<i class="fa fa-tty showicon"></i> CONTACT US</a></li>


        <li class="hovering"><button type="button" class="btn btn-default btn-block loginindex" >Login</button></li>
          
        
      </ul>
     
    </div>
    
    </div>
  </div>
</nav>


 <div class="overlaymb" id="blackmobile"></div>
<div class="mobileonly">
<div id="mySidenav" class="sidenav">
 <a  href="index.php" style="padding: 8px 8px 8px 0px;background-color: rgba(239, 239, 239, 0.76)"><img src="img/logo.png" class="logo"></a>
   <ul class="nav navbar-nav navbar-center header" style="color:#74787B">
      
        <li class="dropdown mobileview" style="color:#74787B">
          <a  href="search_results.php"><i class="fa fa-search showicon">  SEARCH</i></a>
                  </li>
<!--<div > <img id="latestData" style="margin-right: 15%;color:red;"></div>-->
<input type="hidden" id="latestData1">
<input type="hidden" id="latestData11">
        <li class="dropdown mobileview" style="color:#74787B">
          <a href="community.php"><i class="fa fa-commenting showicon"> COMMUNITY</i></a>
         
        </li>
        
        <li class="mobileview" style="color:#74787B"><a href="videos.php"><i class="fa fa-crosshairs showicon"> VIDEO</i></a></li>
         
        
        <li class="dropdown mobileview">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users showicon"> SHOP <span class="caret"></span></i></a>
          <ul class="dropdown-menu">
      <!--    <li><a href="#">SMG Shop</a></li>-->
            <li><a href="vendors.php">Vendors</a></li>
            <li><a href="become_sponsers.php">Become a Vendor</a></li>
                      
          
             
            
          </ul>
        </li>
        
        
         <li class="dropdown mobileview">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users showicon"> ABOUT US <span class="caret"></span></i></a>
          <ul class="dropdown-menu">
          <li><a href="page.php?page_id=12&nitir=jggggkl">About Us</a></li><li><a href="page.php?page_id=10&nitir=jggggkl">Ambassadors </a></li><li><a href="page.php?page_id=13&nitir=jggggkl">Post Restrictions </a></li><li><a href="page.php?page_id=2&nitir=jggggkl">Privacy Policy and Terms</a></li>            
           <!-- <li><a href="#">Media</a></li>
            <li><a href="#">Ambassadors</a></li>
             <li><a href="#">Partners</a></li>-->
             
            
          </ul>
        </li>
        <li class="mobileview"><a href="contact.php"><i class="fa fa-tty showicon"> CONTACT US</i></a></li>
        <!--mobile notification-->
                <!--mobile notification/-->
        <li class="hovering"><button type="button" class="btn btn-default btn-block loginindex" >Login</button></li>
        
      </ul>
</li>
    </ul>
</div>


<span class="glyphicon glyphicon-menu-hamburger" style="font-size:21px;cursor:pointer;color: white;" onClick="openNav()" id="openbar">
</span>


</div>


 </div>
</div>
 <script>
$(document).ready(function(){
 
    $("#openbar").click(function(){
        $(".overlaymb").show();
 $("#mySidenav").show();
$("#mySidesearch").hide();
    });
$(".overlaymb").click(function(){
        $("#mySidenav").hide();
 $(".overlaymb").hide();
    });
});

</script>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
	document.getElementsByClassName('overlaymb')[0].style.width = "100%";

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.getElementsByClassName('overlaymb')[0].style.width = "0";
}
</script>
     <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAbfTk6G2liULUPKIsIi-JTckpRNHKed1w"></script>
<script>

function getloaction()
  {

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}


navigator.geolocation.getCurrentPosition(success);

function success(position) {
     var lat = position.coords.latitude;
     var long = position.coords.longitude;
	
	 ///alert(long)
	 $.ajax({ type:"POST",url:'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+long+'&sensor=true',
         success: function(data){
            var allow_add =(data.results[0].formatted_address);
			//alert(data);
			$("#address").val(allow_add);
			$("#address1").val(allow_add);
			$("#location11").val(allow_add);
			$("#location1").val(allow_add);
			// $('#address1').hide();  
			showmap();
       
			//document.getElementById("xxxx").submit();
             /*or you could iterate the components for only the city and state*/
         }
});


}

  }
  


  

</script>
<script>
$("#hover_notification_mob").click(function() {
	
	

userid=$('#userid').val();
//alert(userid);
//event_id=$('#hello12').val();


$.post( "ajax/match_noti.php", {userid: userid})
.done(function( data ) {
//$("#child").val( data );
	
	
	
	
});
});
</script>
<script>
/*var map = $(document).find('div#map_map'),
    gmap = $(document).find('div#google-map');
if(map !== undefined || gmap !== undefinded){
$('.footer').hide();
}else{
$('.footer').show();
}*/


$("#hover_notification").click(function() {
	
	

userid=$('#userid').val();
//alert(userid);
//event_id=$('#hello12').val();


$.post( "ajax/match_noti.php", {userid: userid})
.done(function( data ) {
//alert(data);	
//$("#child").val( data );
	
	
	
	
});
});
</script>
<script>
    $(document).ready(function () {
    setInterval(function() {
        $.get("notification_count.php", function (result) {
            //$('#latestData').html(result);
		<!--	$('#latestData').attr('src', 'img/redicon.png');-->
			$('#latestData11').val(result);
			ddddd=$('#latestData11').val();
			
			if(ddddd==0){
				$(".notificationimg1").css({"width":"33%"})
				$('#latestData12').hide();
				}else{
					$('#latestData12').show();
					$(".notificationimg1").css({"margin-top":"20%"})
					}
        });
    }, 60000);
});
</script>

<script>
    $(document).ready(function () {
    setInterval(function() {
        $.get("notification_count.php", function (result) {
            //$('#latestData').html(result);
		<!--	$('#latestData').attr('src', 'img/redicon.png');-->
			$('#latestData1').val(result);
			//alert(result);
			dddd=$('#latestData1').val();
			
			if(dddd==0){
				$(".notificationimg").css({"width":"33%"})
				$('#latestData').hide();
				}else{
					$('#latestData').show();
					$(".notificationimg").css({"margin-top":"20%"})
					}
        });
    }, 60000);
});
</script>
<!--<script type='text/javascript' src='assets/jquery.js'></script>-->
<script type='text/javascript' src='assets/jquery-migrate.js'></script>
<script>
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}


navigator.geolocation.getCurrentPosition(success);

function success(position) {
     var lat = position.coords.latitude;
     var long = position.coords.longitude;
	
	 ///alert(long)
	 $.ajax({ url:'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+long+'&sensor=true',
         success: function(data){
            var allow_add =(data.results[0].formatted_address);
			//alert(allow_add);
			
			$("#address1").val(allow_add);
			// $('#address1').hide();  
			showmap();
       
			//document.getElementById("xxxx").submit();
             /*or you could iterate the components for only the city and state*/
         }
});


}

</script>
<!--<script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>-->
<script type='text/javascript' src='assets/gmaps.js'></script>


<div class="row hiddenbox">
<div class="col-md-12 text-center" style="width:90%; padding: 3% 0%;box-shadow: 0px 3px 19px -2px rgba(74,69,74,1);margin-top: -29px;background-color:#f2f0f1;margin-left:5%;
 z-index: 999999; "> 
  <form class="indexform">  
      <div class="col-sm-12"><input type="text" name="fname" class="form-control" placeholder="Keywords"></div>
       <div class="col-sm-10"><input type="text" name="fname" class="form-control" placeholder="Date"></div>
        <div class="col-sm-10"><input type="text" name="fname" class="form-control" placeholder="Zipcode"></div>
         
         <div class="col-sm-12">
         <select  class="form-control">
  <option value="volvo">All Categories</option>
  <option value="saab">Gathering</option>
  <option value="opel">Classes</option>
  <option value="audi">Non Profit</option>
  <option value="audi">Businesses</option>
</select>
</div>
        <div class="col-sm-12">
        <button type="button" class="btn btn-default btn-block searchindex" style="background-color:#FFBB3A;">Search</button> 
        
      
        </div>
        
        </form>
   </div>
</div>
<div class="mobileonly2">
<div id="mySidesearch" class="sidesearch">
<a  href="index.php" style="padding: 8px 8px 8px 0px;background-color: rgba(239, 239, 239, 0.76)"><img src="img/logo.png" class="logo"></a>
<div class="formsearch " style="text-align:center">
<div style="z-index: 999999999; "> 
 

  <form class="indexform listform" role="form"  action="search_results.php" method="post" onSubmit="return checkForm(this);" id="form">  
      <div class="col-sm-12"> 

<input type="text" class="w3-input w3-animate-input" value=""  name="keywords" placeholder="Keyword" id="keywords" onKeyUp="showmap1()"></div>
       <div class="col-sm-12">
<input type="text" id="serchindexdate" readonly class="w3-input w3-animate-input" placeholder="Date"   name="date" value="" onChange="showmap1()" style="margin-top:5%"/></div>
        <div class="col-sm-12 zipcode" style="width:99%">

<input type="text" class="w3-input w3-animate-input" placeholder="Address or zipcode" value=""  name="address1" id="address1" onKeyUp="showmap()" style="margin-top:5%"><span class="glyphicon glyphicon-screenshot" aria-hidden="true" onClick="getloaction();" style="margin: 13px 18px;    border-bottom: 1px solid #808080;"></span></div>
         <input id="qqqq1" type="hidden"  name="loc_lat1">
         <div class="col-sm-12">
         <select id="top_parent" name="top_parent" onChange="showmap1()" class="w3-input w3-animate-input" style="margin-top:6%">
                                          <option value="" >All Categories </option>
                                           <option value="1" >Marketplace </option>
										 
										 								
                                             
											<option  value="499">Volunteer</option>
                                            								
                                             
											<option  value="497">Gatherings</option>
                                            								
                                             
											<option  value="498">Classes</option>
                                            	
                                            </select>
</div><span><p id="frist61"></p></span>
        <div class="col-sm-12">
        <!--<input type="submit" onClick="hideNav2()" id="serchbtnmobile" class="btn btn-default btn-block searchindex " value="Search" name="btn_search" style="background-color:#FFBB3A;margin-top:10%">--> 
        <a onClick="hideNav2()" id="serchbtnmobile" class="btn btn-default btn-block searchindex serchbtnmobile1" name="btn_search" style="background-color:#FFBB3A;margin-top:12%;padding: 4px 4px 5px 1px;font-size: 19px;">Search</a>
      
        </div>
</form></div>
</div>

</div>
<span class="glyphicon glyphicon-search" style="font-size:21px;cursor:pointer;color: white;" onClick="openNav2()" id="openbar2"></span>

</div>
<span id="map_image" style="display:none;">&nbsp;</span>
     <div class="row" id="map_map"  style="margin:0;">



								<div class="google-map-wrap" itemscope itemprop="hasMap" itemtype="https://schema.org/Map">
					<div id="google-map" class="google-map" style="overflow:hidden">
                    <div id="google-map12" class="google-map" style="overflow:hidden">
					</div><!-- #google-map -->
				</div>

								


				
				
				<script>
                 var marker;
				 var icon;
				 var info;
					var bounds = [];
					var currentPopup;
					var center = null;
					var marker;
				jQuery( document ).ready( function($) {

					/* Do not drag on mobile. */
					var is_touch_device = 'ontouchstart' in document.documentElement;

					//var map =  new google.maps.Map(document.getElementById('google-map'),{
//						//el: '#google-map',
//						//lat: '37.6',
//						//lng: '-95.665',
//						/*scrollwheel: false,
//					    draggable: ! is_touch_device,*/
//						center: {lat: 39.0929849, lng: -95.6153008},
//						zoom: 4
//					});
					
					var map = new GMaps({
						el: '#google-map',
						lat: 39.0929849,
						lng: -95.6153008,
						/*scrollwheel: false,
					    draggable: ! is_touch_device,*/
						zoom: 3
					});

					
                                                                                                                                          
					/* Map Bound */

											/* Set Bound Marker */
						var latlng = new google.maps.LatLng(33.5506329, -117.138861);
						bounds.push(latlng);
						/* Add Marker */
						//marker = new google.maps.Marker
						map.addMarker({
							lat: 33.5506329,
							lng: -117.138861,
							title: 'Subcooling Heating & Air',
							//position: {lat:, lng:},
							//map:map,
							icon: 'https://maps.google.com/mapfiles/ms/icons/purple-dot.png',
							infoWindow: {
								content: '<div class="row" style=""><p><p class="popuptitle">Subcooling Heating & Air</p><div class="col-md-4"> <p class="pull-left"><img class="popupimage" src="somuchgoodadmin/images/subcooling-website.0e429f.png"></p></div><div class="col-md-8"><p class="popupname" >Gabriella  Threadgill</p><p class="popupdate" >10/27/2016</p><p class="popupevent">business</p><a href="busi-detail.php?eventbusi_id=325"><b class="popupread">Read More</b></a></p></div></div>',
maxWidth: 300
								
							}
						});
						
						
						
									/* Set Bound Marker */
						var latlng = new google.maps.LatLng(39.7820375, -104.8954716);
						bounds.push(latlng);
						/* Add Marker */
						//marker = new google.maps.Marker
						map.addMarker({
							lat: 39.7820375,
							lng: -104.8954716,
							title: 'GameWorks Entertainment, LLC',
							//position: {lat:, lng:},
							//map:map,
							icon: 'https://maps.google.com/mapfiles/ms/icons/purple-dot.png',
							infoWindow: {
								content: '<div class="row" style=""><p><p class="popuptitle">GameWorks Entertainment, LLC</p><div class="col-md-4"> <p class="pull-left"><img class="popupimage" src="somuchgoodadmin/images/Picture 6.278cfd.png"></p></div><div class="col-md-8"><p class="popupname" >Laura Kenitzer</p><p class="popupdate" >11/29/2016</p><p class="popupevent">business</p><a href="busi-detail.php?eventbusi_id=333"><b class="popupread">Read More</b></a></p></div></div>',
maxWidth: 300
								
							}
						});
						
						
						
									
					
							
							var latlng = new google.maps.LatLng(38.8995322, -77.1546531);
						bounds.push(latlng);
						/* Add Marker */
						
						var latlng = new google.maps.LatLng(31.7860603, -132.0853276);
						bounds.push(latlng);
						/* Add Marker */
						
							
							
						
						
						
					/* Fit All Marker to map */
					//map.fitLatLngBounds(bounds);

//alert(bounds[0]);
					/* Make Map Responsive */
					var $window = $(window);
					function mapWidth() {
						var size = $('.google-map-wrap').width();
						$('.google-map').css({width: 100 + '%', height: (1000/2) + 'px'});
					}
					mapWidth();
					$(window).resize(mapWidth);
				
				 //icon.event.addListener('click', function() {
          //map.setZoom(12);
          //map.setCenter(icon.getPosition());

				//});
        });
		
		
// google.maps.event.addListener(marker,'click',function(e) {
                //map.setZoom(9);
                //map.setCenter(e.latLng);
   //         });

				</script>

				

			</div>
</div>



<div class="container formsearch mobileshow" id="mobilesearch" style="text-align:center">
<div class="col-md-12 text-center" style="width:90%; padding: 3% 0%;box-shadow: 0px 3px 19px -2px rgba(74,69,74,1);margin-top: -29px;margin-left:5%;
  z-index: 999999999; background-color: rgb(242, 242, 242);"> 
  <form class="indexform listform" role="form"  action="search_results.php" method="post" onSubmit="return checkForm(this);">  
      <div class="col-sm-3"> <input type="text" class="form-control" value="" placeholder="Keywords" name="keywords" id="keywords1" onKeyUp="showmap()"></div>
       <div class="col-sm-3"> <input type="text" id="txtFrom1" class="form-control"  placeholder="Date" name="date" value="" onChange="showmap()"/></div>
        <div class="col-sm-3 zipcode">
        <input type="text" class="form-control" value="" placeholder="Address" name="address1" id="address1" onKeyUp="showmap()"> <span class="glyphicon glyphicon-screenshot" aria-hidden="true" onClick="getloaction();"></span>
        
        
        
        
        </div>
         <input id="qqqq" type="hidden"  name="loc_lat">
        
         <div class="col-sm-3 category">
         <select id="top_parent1" name="top_parent" onChange="showmap()" class="form-control">
                                          <option value="" >All Categories </option>
                                           <option value="1" >Marketplace </option>
										 
										 								
                                             
											<option  value="499">Volunteer</option>
                                            								
                                             
											<option  value="497">Gatherings</option>
                                            								
                                             
											<option  value="498">Classes</option>
                                            	
                                            </select>
</div>
        <div class="col-sm-12">
      <!--  <input type="submit" class="btn btn-default btn-block searchindex searchbtn" value="Search" name="btn_search" style="background-color:#FFBB3A;"> -->
      
        </div>
         <span><p id="frist6"></p></span>
</form></div>
    <div class="row content" style="margin-top:12%;">
    
   
       <div class="col-md-7 indexcolumn">
     <!--<p class="head">SO MUCH GOOD<hr style="width:15%;border:0.5px solid #fbc961;margin-top: -2%;margin-left:42%"/></p>-->
     <p class="head"><button class="btn btn-warning" onClick="window.location.href='community.php'">SOMUCHGOOD</button></p>
    
    <div class="row smgrow">
  
      <div class="col-md-4 col-sm-4 imgboxindex">
        <div class="indexbox">
        
            <a href="blog_detail.php?blog_detail=166"><img src="somuchgoodadmin/images/1479254950gandhi-be-the-change.jpg" class="imgindex">
            <h5 style="padding:10px;height:50px;font-size: 13px;word-break: break-word;font-weight:bold;">Interested in Ambassadorship?</h5>
            <p>admin</p>
            <p>31 October 2016 </p></a>
        </div>
    </div>
         
  
   </div>
    <hr style="border-bottom: 0.3px solid #DEDEDE">

   <div class="row smgrow">
  <!-- <p class="head">COMMUNITY CENTER<hr style="width:15%;border:0.5px solid #fbc961;margin-top: -2%;margin-left:43%"/></p>-->
   <p class="head"><button class="btn btn-warning" onClick="window.location.href='community.php'">COMMUNITY CENTER</button></p>
      <div class="col-md-4 col-sm-4 imgboxindex">
        <div class="indexbox">
        
            <a href="blog_detail.php?blog_detail=170"><img src="somuchgoodadmin/images/1479254654somuchgood.jpg" class="imgindex">
            <h5 style="padding:10px;height:50px;font-size: 13px;word-break: break-word;font-weight:bold;">The benefits of community gardening.</h5>
            <p>admin</p>
            <p>15 November 2016 </p></a>
        </div>
    </div>
      <div class="col-md-4 col-sm-4 imgboxindex">
        <div class="indexbox">
        
            <a href="blog_detail.php?blog_detail=169"><img src="somuchgoodadmin/images/1479253584somuchgood.jpeg" class="imgindex">
            <h5 style="padding:10px;height:50px;font-size: 13px;word-break: break-word;font-weight:bold;">Yoga for depression.</h5>
            <p>admin</p>
            <p>15 November 2016 </p></a>
        </div>
    </div>
      <div class="col-md-4 col-sm-4 imgboxindex">
        <div class="indexbox">
        
            <a href="blog_detail.php?blog_detail=168"><img src="somuchgoodadmin/images/1479253350somuchgood.jpg" class="imgindex">
            <h5 style="padding:10px;height:50px;font-size: 13px;word-break: break-word;font-weight:bold;">Five Reasons why Community is Important.</h5>
            <p>admin</p>
            <p>15 November 2016 </p></a>
        </div>
    </div>
         
  
   </div>
  <hr style="border-bottom: 0.3px solid #DEDEDE">
   
   <div class="row smgrow">
   <!--<p class="head">PRODUCT / SERVICE REVIEWS<hr style="width:15%;border:0.5px solid #fbc961;margin-top: -2%;margin-left:41%"/></p>-->
   <p class="head"><button class="btn btn-warning" onClick="window.location.href='community.php'">PRODUCT / SERVICE REVIEWS</button></p>
      <div class="col-md-4 col-sm-4 imgboxindex">
        <div class="indexbox">
        
            <a href="blog_detail.php?blog_detail=167"><img src="somuchgoodadmin/images/1477971244iu.jpeg" class="imgindex">
            <h5 style="padding:10px;height:50px;font-size: 13px;word-break: break-word;font-weight:bold;">GRAVITY Payments </h5>
            <p>admin</p>
            <p>31 October 2016 </p></a>
        </div>
    </div>
         
  
   </div>
   
   
   
</div>
       <div class="col-md-4 ">

<!--<p class="head" style="margin-right: 29%;margin-top: 6%;">LATEST VIDEOS<hr style="width:24%;border:0.5px solid #fbc961;margin-top: -4%;margin-right:51%;margin-left: 24%;"/></p>-->

<p class="head" style="margin-right: 29%;margin-top: 6%;"><button class="btn btn-warning" onClick="window.location.href='videos.php'">LATEST VIDEOS</button></p>


 <div class="row" >
  
 <div class="col-md-10 imgboxindex" style="text-align:center;">
 
 <div class="indexbox1" class="indexbox1">
   
 
            <a href="video_des.php?video_des=36"><img src="https://img.youtube.com/vi/Uqy5yucXMuk/0.jpg" style="height:176px;width:100%" class="video1">
                <img src="img/play.png" class="play">
              <div>
             <p style="color:black">How to get started with posting your first event.</p>
             <p>4 November 2016</p>
             </div>
       </a>
        </div>
            
           
        </div>
   
       

    </div>
 
 
 
    
   

 <div class="row videorow" >
  
 <div class="col-md-10 imgboxindex" style="text-align:center;">
 
 <div class="indexbox1" class="indexbox">
   
 
            <a href="video_des.php?video_des=32"><img src="https://img.youtube.com/vi/AjZ0KbJcav0/0.jpg" style="height:176px;width:100%" class="video1">
                <img src="img/play.png" class="play">
              <div>
             <p style="color:black">BELIEVE IN YOURSELF</p>
             <p>17 October 2016</p>
             </div>
       </a>
        </div>
            
           
        </div>
   
       

    </div>
 
 
 
    
   

 <div class="row videorow1" >
  
 <div class="col-md-10 imgboxindex" style="text-align:center;">
 
 <div class="indexbox1" class="indexbox">
   
 
            <a href="video_des.php?video_des=31"><img src="https://img.youtube.com/vi/3yFiqdCjNMk/0.jpg" style="height:176px;width:100%" class="video1">
                <img src="img/play.png" class="play">
              <div>
             <p style="color:black">Follow Your heart </p>
             <p>17 October 2016</p>
             </div>
       </a>
        </div>
            
           
        </div>
    </div>    
</div>
     <div class="col-md-1">
     </div>
</div>

 <div class="row content" style="text-align:center;margin-top:5%">
 <!--<p class="head">PARTNERS / VENDORS / SPONSERS <hr style="width:10%;border:0.5px solid #fbc961;margin-left:45%;margin-top:-1%;"></p>-->
 <p class="head"><button class="btn btn-warning" onClick="window.location.href='vendors.php'">PARTNERS / VENDORS / SPONSERS</button></p>
 </div>
 <div class="row content" style="margin:0;">
 <div id="myCarousel" class="carousel slide crouselslider" data-ride="carousel" style="width:85%">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="margin-top:2%">
          
      <!--<div class="item">
      <img src="img/carousel.jpg" alt="Chania" class="carouselimg" style="height:200px;display:inline;width:250px" >
       <img src="img/carousel.jpg" alt="Chania" class="carouselimg" style="height:200px;display:inline;width:250px">
        <img src="img/carousel.jpg" alt="Chania" class="carouselimg" style="height:200px;display:inline;width:250px">
      </div>

      <div class="item">
        <img src="img/carousel.jpg" class="carouselimg" style="height:200px;display:inline;width:250px">
         <img src="img/carousel.jpg" alt="Chania"  class="carouselimg" style="height:200px;display:inline;width:250px">
          <img src="img/carousel.jpg" alt="Chania" class="carouselimg" style="height:200px;display:inline;width:250px">
      </div>-->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 </div>
 </div>
 <script type="text/javascript">
			</script>
 <script type="text/javascript">
function showmap()
  { $('#map_image').slideUp();
	  
	  
	
	selecid1=$('#address1').val();
	
	//alert(selecid1);
	$.ajax({ url: 'address.php',
         data: {selecid1: selecid1},
         type: 'post',
         success: function(output) {
                  // alert(output);
				     
				    $("#qqqq").val( output );
					
					 if(output == "") {
	  //document.getElementById("frist6").innerHTML="We can't recognize entered address. Please try different address !";
        form.address1.focus();
        return false; 
	  
	}document.getElementById("frist6").innerHTML="";
				   
                  }
});
	
	
	
    
	  
	  
	  
  
  
	   cat=$('#top_parent1').val();
	   // cat1 = $('select[name="top_parent"] option:selected').val(); 
		//alert(cat1);
	keywords=$('#keywords1').val();
	
	date=$('#txtFrom1').val();	
	address=$('#address1').val();		
		
				
		
		$.ajax({ url: 'ajax/map.php',
         data: {keywords: keywords,date: date,address: address,cat: cat},
         type: 'post',
         success: function(output) {
                  // alert(output);	
					
				     $('.www').hide();
				    $("#qqqq").html( output );			  				
					if($(window).width()<= 768){
						var w_height = $(window).height(),
							h_height = $('.navrow').height(),
							f_height = $('.footer').height(),
							Hm_height = w_height - h_height,
							m_height = Hm_height-f_height;
						$('#google-map').height(m_height);
					
					}
				
					$(window).resize(function() {
						if($(window).width()<= 768){			
						  var w_height = $(window).height(),
							  h_height = $('.navrow').height(),
							  f_height = $('.footer').height(),
							  Hm_height = w_height - h_height,
							  m_height = Hm_height-f_height;
						  $('#google-map').height(m_height);
						}
					});
					//alert("showmap "+m_height);
				   
                  }
});
	  
	  
	  
	  
	  }</script>
      <script type="text/javascript">
function showmap1()
  {
  
  //alert("ss");
  selecid1=$('#address').val();
	
	//alert(selecid1);
	$.ajax({ url: 'address.php',
         data: {selecid1: selecid1},
         type: 'post',
         success: function(output1) {
                  // alert(output);
				     
				    $("#qqqq1").val( output1 );
					
					 if(output1 == "") {
	 // document.getElementById("frist61").innerHTML="We can't recognize entered address. Please try different address !";
        form.address.focus();
        return false; 
	  
	}
	document.getElementById("frist61").innerHTML="";
				   
                  }
});
  
  
  
	   cat=$('#top_parent').val();
	   // cat1 = $('select[name="top_parent"] option:selected').val(); 
		//alert(cat1);
	keywords=$('#keywords').val();
	
	date=$('#txtFrom').val();	
	address=$('#address').val();		
		
				
		
		$.ajax({ url: 'ajax/map.php',
         data: {keywords: keywords,date: date,address: address,cat: cat},
         type: 'post',
         success: function(output) {
                  // alert(output);
				     $('.www').hide();
				    $("#qqqq").html( output );
				if($(window).width()<= 768){
				var w_height = $(window).height(),
					h_height = $('.navrow').height(),
					f_height = $('.footer').height(),
					Hm_height = w_height - h_height,
					m_height = Hm_height-f_height;
				$('#google-map').height(m_height);
			
			}
		
			$(window).resize(function() {
				if($(window).width()<= 768){			
				  var w_height = $(window).height(),
					  h_height = $('.navrow').height(),
					  f_height = $('.footer').height(),
					  Hm_height = w_height - h_height,
					  m_height = Hm_height-f_height;
				  $('#google-map').height(m_height);
				}
			});
				
				
				
				   
                  }
});
	  
	  
	  
	  
	  }</script>
      <script language="javascript">
	   
	 
		//***********************
		
		$(document).ready(function() {
		$('select[name="business"]').change(function(){
			//var membership = $('select[name="top_parent"] option:selected').attr('id');
			var market = $('select[name="business"] option:selected').val();
			
			if(market == "38"){
				//alert(market);
				$('.farmer').css({
					"display":"block"
				});
			}else if(market != "38"){
				//alert(membership);
				$('.farmer').css({
					"display":"none"
				});
				//$('input[name="amount"]').val("");
				
			}			
});
			
			
			$('input[name="btn_search"]').click(function(){
				var range_val = document.getElementById("range").value;
                var range_set = document.getElementById("range-value").value = range_val;
				console.log("miles Range "+range_set);
				$('form[class="listform"]').submit();
			});
});
		//*******************
		
		</script>
  <script language="javascript">
	   
	    $(document).ready(function() { 
		
		
	
		 $('#child_cat').hide();
			 if($('#top_parent').val()=="1")
			 {
				  $('#sub_cat').hide();
				   $('#business').show();
				  //$('#farmer').show();
				//$('#sub_cat').hide();
				  
			 }
			 else
			 {$('#child option[value!="-1"]').remove();
				  $('#sub_cat').show();
				   $('#business').hide();
				top_parent=$('#top_parent').val();
				//alert(top_parent);
				$.post( "somuchgoodadmin/ajax/find_category.php", {top_parent: top_parent})
               .done(function( data ) {
                $("#parent").html( data );
});
				
			
			 
			 }});
		//***********************
		
		function show_child_cat()
		{
			 if($('#parent').val()=="-1")
			 {
				  $('#child_cat').hide();
               	$('#child option[value!="-1"]').remove();
				 //$('#sub_cat').hide();
				 
				
				 
			 }

			 else
			 { 
				  $('#child_cat').show();
				parent=$('#parent').val();
				//alert(top_parent);

				$.post( "somuchgoodadmin/ajax/find_child.php", {parent:parent})
               .done(function( data ) {
                $("#child").html( data );
				
});
				
			 }
			 
		}

		//*******************
		
		</script>
        <script language="javascript">
	   
	  function showcat()
		{ 
	
		 $('#child_cat').hide();
			 if($('#top_parent').val()=="1")
			 {
				  $('#sub_cat').hide();
				   $('#business').show();
				 // $('#farmer').show();
				//$('#sub_cat').hide();
				 
			 }
			 else
			 {$('#child option[value!="-1"]').remove();
				  $('#sub_cat').show();
				  $('#business').hide();
				top_parent=$('#top_parent').val();
				//alert(top_parent);
				$.post( "somuchgoodadmin/ajax/find_category.php", {top_parent: top_parent})
               .done(function( data ) {
                $("#parent").html( data );
});
				
			
			 
			 }}
		//***********************
		
		function show_child_cat()
		{
			 if($('#parent').val()=="-1")
			 {
				  $('#child_cat').hide();
				  
               	$('#child option[value!="-1"]').remove();
				 //$('#sub_cat').hide();
				 
				

			 }

			 else
			 { 
				  $('#child_cat').show();

				parent=$('#parent').val();
				//alert(top_parent);
				$.post( "somuchgoodadmin/ajax/find_child.php", {parent:parent})
               .done(function( data ) {
				   
				 
                $("#child").html( data );
				 $('#child_cat').show();
});
				
			 }
			 
		}

		//*******************
		
		</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
            type="text/javascript"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css"
          rel="Stylesheet" type="text/css" />

     <script type="text/javascript">
        $(function () {
			
            $("#txtFrom1").datepicker();
		});
    </script>
     <script type="text/javascript">
        $(function () {
			
     $("#serchindexdate").datepicker();
		});
    </script>
    
    
<script>
function openNav2() {
    document.getElementById("mySidesearch").style.width = "250px";

}
function hideNav2() {
    document.getElementById("blackmobile").style.width = "0px";
document.getElementById("mySidesearch").style.width = "0px";
}

</script>


<script>
$(document).ready(function(){
 
    $("#openbar2").click(function(){
        $(".overlaymb").show();
		$(".overlaymb").css({"width":100+"%"});
 $("#mySidesearch").show();
    });
$(".overlaymb").click(function(){
        $("#mySidesearch").hide();
		$(".overlaymb").css({"width":0});
 $(".overlaymb").hide();
    });
	
	
});
</script>
<script>
$(document).click(function (event) {            
    $('#map_image').slideUp();
});
</script>
<div class="footer">
 <div class="container formobilefooter">
<div class="row footerrow">
  
     <div class="col-md-2 col-xs-2 footercol">
     
     <h4 class="footervalue">2</h4>
     <h5 class="footervalue1">GATHERINGS</h5>
     </div>
     <div class="col-md-2 col-xs-2 footercol">
     <h4 class="footervalue">3</h4>
     <h5 class="footervalue1">CLASSES</h5>
     </div>
     <div class="col-md-2 col-xs-2 footercol">
     <h4 class="footervalue">63</h4>
     <h5 class="footervalue1">MEMBERS</h5>
     </div>
     <div class="col-md-2 col-xs-2 footercol">
     <h4 class="footervalue">0</h4>
     <h5 class="footervalue1">NON PROFITS</h5>
     </div>
     <div class="col-md-2 col-xs-2 footercol">
     <h4 class="footervalue">2</h4>
     <h5 class="footervalue1">BUSINESSES</h5>
     </div></div>
     <hr style="border-bottom: 1px solid white;margin:0;margin-bottom: 1%;">
     <div class="row" style="margin-top:0%">
       <div class="col-md-5 mobilealign" style="padding:0px">
              <a href="https://twitter.com/somuchgoodorg" class="icon-button twitter" target="_blank"><i class="fa fa-twitter"></i><span></span></a>
    <a href="https://www.linkedin.com/company/12904957?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A12904957%2Cidx%3A1-1-1%2CtarId%3A1475828487115%2Ctas%3Asomuchgood" class="icon-button facebook" target="_blank"><i class="fa fa-linkedin"></i><span></span></a>
    <a href="https://www.instagram.com/somuchgoodorg/" class="icon-button google-plus" target="_blank"><i class="fa fa-instagram"></i><span></span></a>
    <a href="https://www.youtube.com/channel/UCsNZGVedABOCL6i-ofZLPtA" class="icon-button youtube" target="_blank"><i class="fa fa-youtube-square"></i><span></span></a><a href="https://www.facebook.com/somuchgoodorg/" class="icon-button facebook" target="_blank"><i class="fa fa-facebook-official"></i><span></span></a>
    <a href="donation.php"><button type="button" class="btn donate" >DONATE</button></a>
       </div>
        <div class="rights col-md-4" style="margin-top:1%;text-align: center;" >
        SoMuchGood © 2016-2017, All Rights Reserved
       </div>
        <div class="termsofuse col-md-3" style="margin-top:1%;text-align: center;">
        <a href="page.php?page_id=2&nitir=jggggkl">Terms Of Use</a>   |  <a href="page.php?page_id=2&nitir=jggggkl">Privacy Policy</a>
       </div>
     </div>
 </div>
 </div>
<div id="loginpopup" class="popup">


            <div class="overlay"></div>
            <div class="reply">

                <div class="seprateregister">


                    <form class="contactform" action="" method="post">
                        <h5 class="articleheadlogin text-center">
                           
                        </h5>
                        <div class="row">
                        <a href="https://www.facebook.com/dialog/oauth?client_id=841831199256382&redirect_uri=https%3A%2F%2Fsomuchgood.org%2Ffb_login.php&state=eafc13c0c2e5b697c6da1b68af281453&scope=email"><img src="img/signupfb.png" class="fblogin"></a>                          
                        </div>
                        <!--<div class="row">
                            <img src="img/or.png" class="or" />
                        </div>-->
                        <div class="row">
                            <div class="col-md-10 logincol">
                                                           <p class="comment">Username Or Email</p>
                                <input type="text" class="form-control" name="username123" value="" required/>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-10 logincol">
                                <p class="comment">Password</p>
                                <input type="password" class="form-control" name="password123" required  value=""/>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12 chklogin logincol">
                               <input type="checkbox" value="Remember Me" name="Remember">&nbsp Remember me
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 contactprofilecol" >
                            <input type="submit" value="LOGIN" name="submit_login" class=" btn contactprofile1" style="margin-left: 3%;">
                             

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 logincol">
                              
                                <p class="comment1"> Not a Member, <a href="register.php">Click Here</a><span style="float:right"> <a href="forgot_password.php">Lost Password?</a></span></p>
                            </div>
                        </div>

                      

                    </form>
                </div>


            </div>

        </div>
        
        <script>
		$(document).ready(function(){
			$('.loginindex').click(function(){
				$('#loginpopup').css({
					"visibility":"visible"
				});
			});
			
			$('#loginpopup .overlay').click(function(){
				$('#loginpopup').css({
					"visibility":"hidden"
				});
			});
		});
		</script>

<script>

$(document).ready(function(){
	if($(window).width()<= 768){
		var w_height = $(window).height(),
			h_height = $('.navrow').height(),
			f_height = $('.footer').height(),
			Hm_height = w_height - h_height,
			m_height = Hm_height-f_height;
		$('#google-map').height(m_height);
	
	}

	$(window).resize(function() {
		if($(window).width()<= 768){			
		  var w_height = $(window).height(),
			  h_height = $('.navrow').height(),
			  f_height = $('.footer').height(),
			  Hm_height = w_height - h_height,
			  m_height = Hm_height-f_height;
		  $('#google-map').height(m_height);
		}
	});
});
</script>

<div id="qqqq" style="display:none;"></div><!doctype html>
</body>
</html>