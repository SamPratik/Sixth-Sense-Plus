<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sixth Sense Plus</title>

<!-------Bootstrap CSS------>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.theme.min.css" rel="stylesheet">
    
<!-----Custom JS-------->
    <script src="js/custom.js"></script>
    
    
<!------Bootstrap JS------->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>	
    
    
    <!------CAROUSEL SLIDE---------->
	<div id="myCarousel" class="carousel slide" style="float:left;">
		
        <!------Indicators------->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol><!-------indicators------->
        
        <!-------carousel-inner------->
       	<div class="carousel-inner" style="float:left;">
			<div class="item">
            	<img src="images/slide4.jpg" class="img-responsive" style="float:left;width: 1300px;height: 250px;margin-left: 35px;margin-top: 11px;">
                <div class="carousel-caption">
                	<h1 style="color:black;font-family: cursive;font-size: 40px;position: absolute;margin-top: 195px;margin-left: 245px;">Disease Guidence &nbsp;<span class="glyphicon glyphicon-plus" style="color:red;"></span></h1>
                </div>
            </div>
            
            <div class="item active">
            	<img src="images/slide3.jpg" class="img-responsive" style="float:left;width: 1300px;height: 250px;margin-left: 35px;margin-top: 11px;">
                <div class="carousel-caption">
                	<h1 style="color:black;font-family: cursive;font-size: 40px;position: absolute;margin-top: 195px;margin-left: 245px;">Disease Guidence &nbsp;<span class="glyphicon glyphicon-plus" style="color:red;"></span></h1>
                </div>
            </div>
            
            <div class="item"> 
            	<img src="images/slide1.jpg" class="img-responsive" style="float:left;width: 1300px;height: 250px;margin-left: 35px;margin-top: 11px;">
                <div class="carousel-caption">
                	<h1 style="color:black;font-family: cursive;font-size: 40px;position: absolute;margin-top: 195px;margin-left: 245px;">Disease Guidence &nbsp;<span class="glyphicon glyphicon-plus" style="color:red;"></span></h1>
                </div>
            </div>       
            
            <div class="item">
            	<img src="images/slide5.jpg" class="img-responsive" style="float:left;width: 1300px;height: 250px;margin-left: 35px;margin-top: 11px;">
                <div class="carousel-caption">
                	<h1 style="color:black;position: absolute;margin-top: 195px;margin-left: 245px;font-family: cursive;font-size: 40px;">Disease Guidence &nbsp;<span class="glyphicon glyphicon-plus" style="color:red;"></span></h1>
                </div>
            </div>
         </div><!-----carousel-inner----->
         
         <!----icon prev & next-------->
         <a style="height:310px" class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
         <a style="height:310px" class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
         
     </div><!-----carousel slide----->
     
     <!-------END OF CAROUSEL-------->
     
     <!-------STARTING OF NAVBAR--------->
     
     <div style="float:left; width:100%;" class="navbar navbar-inverse" >

    	<div class="container" style="float:left;">
        	<a style="margin-left:15px;" class="navbar-brand" href="home.php">Sixth Sense Plus &nbsp;<span style="color:red;" class="glyphicon glyphicon-plus"></span></a>
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <!----navbar-collapse------>
        	<div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="symptoms.php">Symptoms</a></li>
                    <li><a href="disease.php">Disease</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Doctors<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="cardiologist.php">Cardiologist</a></li>
                            <li><a href="dentist.php">Dentist</a></li>
                            <li class="divider"></li>
                            <li><a href="gynecologist.php">Gynecologist</a></li>
                            <li><a href="oncologist.php">Oncologist</a></li>
                            <li><a href="psychiatrist.php">Psychiatrist</a></li>
                            <li class="divider"></li>
                            <li><a href="surgeon.php">Surgeon</a></li>
                            <li><a href="allergist.php">Allergist</a></li>
                            <li><a href="audiologist.php">Audiologist</a></li>
                            <li class="divider"></li>
                            <!--<li><a href="dentist.php">Dentist</a></li>-->
                            <li><a href="microbiologist.php">Microbiologist</a></li>
                        </ul>
                    </li>
                    <li><a href="emergency.php">Emergency</a></li>
                </ul>
            </div><!------navbar-collapse-------->
            
        </div><!-----container class------>

</div><!-------navbar-inverse--------->