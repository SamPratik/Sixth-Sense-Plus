<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Disease</title>

<style type="text/css">
	body,form,h1,input,div,p {
		margin:0px;
		padding:0px;	
	}
	
	div.flip3d {
		float:left; height:200px; width:250px; margin-right:10px; margin-top:80px; z-index:20;
	}
	
	div.flip3d > div.front {
		position: absolute;
		height:200px; width:250px;
		-webkit-transform: perspective(600px) rotateY(0deg);
		transform: perspective(600px) rotateY(0deg);
		-webkit-backface-visibility:hidden;
		backface-visibility:hidden;
		transition: transform .5s linear 0s;
	}
	
	div.flip3d > div.back {
		position:absolute;
		height:200px; width:250px;
		-webkit-transform: perspective(600px) rotateY(180deg);
		transform: perspective(600px) rotateY(180deg);
		/*-webkit-backface-visibility:hidden;
		backface-visibility:hidden;*/
		transition: transform .5s linear 0s;
	}
	
	div.flip3d:hover > div.front {
		transform: perspective(600px) rotateY(-180deg);	
		-webkit-transform: perspective(600px) rotateY(-180deg);
	}
	
	div.flip3d:hover > div.back {
		transform: perspective(600px) rotateY(0deg);	
		-webkit-transform: perspective(600px) rotateY(0deg);
	}
</style>

<!--------Bootstrap CSS---------->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>

<body>

<?php include_once("header1.php"); ?>
    
    <div class="col-lg-12">
        <h1 class="col-lg-2 col-lg-offset-5" style="color:white;text-align:center;float:left; margin-top:-5px; position:absolute; z-index:100;">Disease</h1>
    
    
        <form style="float:left; left: 777px; position:absolute; z-index:100;float:left;" class="col-lg-5" action="diseaseSearch.php" method="get">
            <input class="col-lg-10 col-lg-3 col-lg-offset-7" style="width: 270px;height: 30px;border: 1px solid black;border-radius: 5px; margin-left: -8px;" type="search" name="k">
            <input style="height:30px; margin-left:2px;padding-top: 4px;width: 71px;" class="btn btn-primary btn-md col-lg-2" type="submit" value="Search">
        </form>
    </div>
    
    <!---------Background-image DIV--------->
    <div style="float: left;height: 400px;width: 1153px;background-repeat: no-repeat;background-position: -31px 0px; background-image: url(images/disease_background.jpg); background-size: cover;position: absolute;top: 313px;margin-left: 50px;z-index: 50; opacity:0.7;">
    
    </div>
        
    <!---------background-color DIV-------->
    
    <div style="float:left; position:absolute; z-index:10;height: 400px;width: 1123px;margin-left: 50px; background-color:black; top:313px;">   

	</div>
    
    <!------Container of all three circles-------->
    	<div class="all-3d" style="float: left; margin-left: 127px; position:absolute;z-index:60; top:273px; margin-top:50px;">
        
        	<!------left side circle------> 
            <div class="flip3d">
                <div class="back" style="height:250px; width:250px; border-radius:50%; text-align:center; line-height:16px; background-color:#9933CC;"><p style="color:white;">Due to</p> <p style="color:white;">standard operating</p> <p style="color:white;">procedures, implemented to </p><p style="color:white;">ensure the privacy and excellent</p> <p style="color:white;">health care for all of the patients we</p> <p style="color:white;"> serve, CDD will only release results</p><p style="color:white;"> and related information to the</p> <p style="color:white;"> clinic/physician submitting the</p><p style="color:white;"> patient’s specimen for</p><p style="color:white;"> testing.</p>
                </div>
                
                <div class="front" style="height:250px; width:250px; border-radius:50%; background-image:url(images/our_services_emergency.jpg); background-size:cover; background-repeat:no-repeat;background-position: -121px 0px;"><p style="color: red;text-align: center;margin-top: 94px;font-size: 40px;font-family: cursive;">Our Service</p>
                </div>
            </div>
            
            <!------middle side circle------>
            <div class="flip3d" style="margin-left:100px;">
                <div class="back" style="height:250px; width:250px; border-radius:50%; background-color:#CC0000; text-align:center;">
                	<p style="color:white;">We have</p><p style="color:white;"> provided many ooportunities</p><p style="color:white;"> for a patient who is sufferign for a</p><p style="color:white;"> disease. Sixth Sense Pluss will help </p><p style="color:white;">one to find his/her disease quicky from </p><p style="color:white;">symptoms page. So the goal of our</p><p style="color:white;"> website is to give a people a</p><p style="color:white;"> health with no disease.</p>
                </div>
                <div class="front" style="height:250px; width:250px; border-radius:50%; background-image:url(images/our_goal_emergency.jpg); background-size:cover; background-repeat:no-repeat;background-position:-138px 0px;"><p style="color: red;text-align: center;margin-top: 94px;font-size: 40px;font-family: cursive;">Our Goal</p></div>
            </div>
            
            <!------righ side circle------> 
            <div class="flip3d" style="margin-left:100px; float:left; ">
                <div class="back" style="height:250px; width:250px; border-radius:50%; text-align:center; background:#280000;line-height: 10px;">
                	<p style="color:white;margin-top: 3px;">In this</p><p style="color:white;"> page you can search</p><p style="color:white;"> for a disease by the disease </p><p style="color:white;">name in the search box. After</p><p style="color:white;"> completing the searching one will</p><p style="color:white;"> have the full deatails about that</p><p style="color:white;"> particular disease. He/she will be able</p><p style="color:white;"> to see the full description, symptoms,</p><p style="color:white;"> remedy of that disease and he/she </p><p style="color:white;">will also find a link of a doctor who </p><p style="color:white;">can provide treatment for</p><p style="color:white;"> that disease. </p>
                </div>
                <div class="front" style="height:250px; width:250px; border-radius:50%; background-image:url(images/need_help_emergency.jpg); background-size:cover; background-repeat:no-repeat;background-position: -33px 0px;"></div>
            </div>
            
        </div>
    
    <div class="footer col-lg-12" style="height:35px; float:left; background-color:#000000; position:absolute; top:713px;">
	<center>
    	<p style="color:white; margin-top:10px;">Designed & Developed by Sahrima Jannat Oishwee &nbsp;&copy; 2016</p>
    </center>
</div>

<div>

</div>

<!--------Bootstrap JS-------->
<!--<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>-->
</body>
</html>