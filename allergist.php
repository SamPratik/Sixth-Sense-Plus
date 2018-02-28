<?php include_once("allergistGoogleMapSearch.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allergist</title>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB_q5OQblNFn9uGd2XfIYqO2y_RrmgcsJU&sensor=false">
</script>

<script type="text/javascript">
	function initialize() {
		var latlng = new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>);
		var myOptions = {
			zoom:15,
			center:latlng,
			mapTypeId:google.maps.MapTypeId.ROADMAP		
		};
		
		var map = new google.maps.Map(document.getElementById("map_canvas"),
		myOptions);
		
		var point = new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>);
		var marker = new google.maps.Marker({
			position:point,
			map:map,
			title:'<?php echo $hospital; ?>',
			draggable:true,	
		})
	}
</script>

<!--------Bootstrap CSS---------->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>

<body onLoad="initialize()">

	<!-------Carousel Slide and menu-bar--------->
	<?php include_once("header1.php"); ?>

	<!--------Heading----------------->
	<h1 style="text-align:center;">Allergist</h1><br/><br/>

        <!--------Doctor's Information DIV----------->
        <div class="doc-info" style="float:left;margin-top:-20px;margin-left:100px; width:480px; height:475px; border:2px solid black; border-radius:15px;">
            <form style="float:left" action="allergist.php" method="get">
                <strong style="float:left;margin-left: 31px;margin-top: 12px;font-size: 16px;">Search to see the doctor's information of your nearest location: </strong><br/><br/>
                <input placeholder="Search by place name" style="float:left; width:300px; height: 30px;border: 1px solid black;border-radius: 5px;margin-left: 31px;" type="search" name="k">
                <input name="search" class="btn btn-primary btn-md" type="submit" value="Search" style="margin-left: 5px;height: 31px; float:left;">
                
            </form>
            
            <!----------Overflow scroll DIV----------->
            <div style="height: 330px;width: 415px; float: left;margin-top: 38px;border: 1px solid black; border-radius:15px;
            margin-left: 31px; overflow-y:scroll; overflow-x:scroll;">
            	<?php include_once("allergistSearch.php"); ?>
            </div>
        </div>
        
        <!----------Google Map Search DIV----------->
        <div class="map-search" style="margin-top:-20px;float:left;width:480px; height:475px; margin-left:50px; border:2px solid black; border-radius:15px; margin-bottom:20px;">
            <form style="float:left" action="allergist.php" method="get">
                <strong  style="float:left;margin-left: 31px;margin-top: 12px;font-size: 16px;">Search to see the location of a hospital in google map:</strong>
                <input placeholder="Search by chamber name" style="float:left; width:300px; height: 30px;border: 1px solid black;border-radius: 5px;margin-left: 31px;" type="search" name="m">
                <input name="map" class="btn btn-primary btn-md" type="submit" value="Search" style="margin-left: 5px;height: 31px; float:left;">
            </form>
            
            <!---------Google Map Division------------>
            <div id="map_canvas" style="width:400px; height:380px; float:left; margin-top:10px; border-radius:15px;margin-left: 31px;">
            </div>
        </div>
        
        <?php include_once("footer.php"); ?>

</body>
</html>