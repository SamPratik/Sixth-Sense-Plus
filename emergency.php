<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Emergency</title>

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

</head>

<body>

<?php include_once("header1.php"); ?>

	<h1 style="text-align:center; z-index:200; color:white; position:absolute; top: 258px;left: 500px;">Emergency</h1>
	<!------Search Box with Search button------->
	<form style="margin-top: -40px;margin-left: 125px;" action="emergencySearch.php" method="get">
    	<input placeholder="Search by place name" style="height: 30px;border: 1px solid black;border-radius: 5px; position:absolute; z-index:200;top: 287px;;left: 24px;" type="search" name="k" class="col-lg-3 col-lg-offset-7">
        <input name="search" class="btn btn-primary btn-md" style="float:left;margin-left: 5px;height: 31px;padding-top: 5px; position:absolute; z-index:200;top: 287px;;right: 106px;" type="submit" value="Search">
    </form>
    
    <!--------Ambulance Background image with opacity--------->
    <div style=" background-image:url(images/ambulance_background.jpg); background-position: 0px -102px; background-repeat:no-repeat; height:400px; width:1040px; float:left;margin-left:100px;  opacity:0.5; position:absolute;z-index:40; top:273px;"></div>
    
    <!--------Background Color behind the ambulance background image-------->
    <div style="background-color:black; float:left; height:400px; width:1025px; position:absolute; z-index:10; top:273px;margin-left: 99px;"></div>
    
    	<!------Container of all three circles-------->
    	<div class="all-3d" style="float: left; margin-left: 127px; position:absolute;z-index:60; top:273px;">
        
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
                	<p style="color:white; margin-top:3px;">In Sixth</p><p style="color:white;"> Sense Plus Emrgency</p><p style="color:white;"> page will help you to find the</p><p style="color:white;"> ambulances in your nearest area.</p><p style="color:white;"> When ever your in a hurry you just go </p><p style="color:white;">to the sixth sense plus and click the </p><p style="color:white;">emergency button on the top then</p><p style="color:white;"> search by the place name you live in.</p><p style="color:white;"> Then you will find the contact </p><p style="color:white;">number of the ambulances </p><p style="color:white;">and the address of </p><p style="color:white;">the hospital</p>
                </div>
                <div class="front" style="height:250px; width:250px; border-radius:50%; background-image:url(images/need_help_emergency.jpg); background-size:cover; background-repeat:no-repeat;background-position: -33px 0px;"></div>
            </div>
            
        </div>
        
        <!-----footer DIV------->
        <div class="footer col-lg-12" style="height:35px; float:left; background-color:#000000; margin-top:380px;">
            <center>
                <p style="color:white; margin-top:10px;">Designed & Developed by Sahrima Jannat Oishwee &nbsp;&copy; 2016</p>
            </center>
		</div>

</body>
</html>