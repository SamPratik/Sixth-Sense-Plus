<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Symptoms</title>

<!---------Bootstrap CSS--------->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

<!---------Bootstrap JS--------->
<!--<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>-->

<style>

	body,htm,head,title,div,iframe,input,form {
		margin:0px;
		padding:0px;	
	}
	
	div.content> div.symptoms-holder > div.symptoms-6 > form > input {
    	/*margin-bottom: 15px;*/
	}

</style>
</head>

<body>

	<?php include_once("header1.php"); ?>
    
    <div class="content" style="float:left; float:left; width:1100px; margin-left: 65px;">
    
     <div style="float:left;height: 425px;width: 719px;background-image: url(images/laptopFrame.png);background-size: cover;">
    	<iframe style="height: 348px;margin-top: 24px;margin-left: 89px;width: 539px;" src="https://www.youtube.com/embed/zDyRCqivb18" frameborder="0" allowfullscreen>
        </iframe>    
    </div>
    
        <div class="symptoms-holder" style="padding-left: 17px;float:left; border:2px solid black;">
        
        	<h2 style="margin-left: -4px;">Please select the symptoms you have and see the diseases you may have: </h2>
        
            <form action="symptomsBackend.php" method="post">
        
            	<div class="symptoms-6" style="float:left; margin-right:25px;">
                    <input type="checkbox" name="headache" value="headache" style="margin-bottom: 15px;"> <span>Headache</span><br/>
                    <input type="checkbox" name="vomiting" value="vomiting" style="margin-bottom: 15px;"> <span>Vomiting</span><br/>
                    <input type="checkbox" name="confusion" value="confusion" style="margin-bottom: 15px;"> <span>Confusion</span><br/>
                    <input type="checkbox" name="vision" value="vision" style="margin-bottom: 15px;"> <span>Blurred or double vision</span><br/>
                    
                    <input type="checkbox" name="itchy" value="itchy" style="margin-bottom: 15px;"> <span>Itchy eyes</span><br/>
                    <input type="checkbox" name="pain" value="pain" style="margin-bottom: 15px;"> <span>Pain</span><br/>
                </div>
                
                <div  class="symptoms-6" style="float:left; margin-right:25px;">
                    <input type="checkbox" name="skin" value="skin" style="margin-bottom: 15px;"> <span>cracked skin</span><br/>
                    <input type="checkbox" name="nose" value="nose" style="margin-bottom: 15px;"> <span>blocked nose</span><br/>
                    <input type="checkbox" name="breath" value="breath" style="margin-bottom: 15px;"> <span>shortness of breath</span><br/>
                    
                    <input type="checkbox" name="language" value="language" style="margin-bottom: 15px;"> <span>Delayed language development</span><br/>
                    <input type="checkbox" name="listen" value="listen" style="margin-bottom: 15px;"> <span>Inability to listen</span><br/>
                    <input type="checkbox" name="directions" value="directions" style="margin-bottom: 15px;"> <span>Inability to follow directions</span><br/>
                </div>
                
                <div  class="symptoms-6" style="float:left; margin-right:25px;">
                    <input type="checkbox" name="bleeding" value="bleeding" style="margin-bottom: 15px;"> <span>bleeding gums</span><br/>
                    <input type="checkbox" name="sensitive" value="sensitive" style="margin-bottom: 15px;"> <span>Sensitive teeth</span><br/>
                    <input type="checkbox" name="Loose" value="Loose" style="margin-bottom: 15px;"> <span>Loose teeth</span><br/>
                    
                    <input type="checkbox" name="Insomnia" value="Insomnia" style="margin-bottom: 15px;"> <span>Insomnia</span><br/>
                    <input type="checkbox" name="suicide" value="suicide" style="margin-bottom: 15px;"> <span>suicide attempts</span><br/>
                    <input type="checkbox" name="weight" value="weight" style="margin-bottom: 15px;"> <span>weight loss</span><br/>
                </div>
                
                <div  class="symptoms-6" style="float:left; margin-right:25px;">
                	<input type="checkbox" name="mood" value="mood" style="margin-bottom: 15px;"> <span>empty mood</span><br/>
                    <input type="checkbox" name="cough" value="cough" style="margin-bottom: 15px;"> <span>Coughing</span><br/>
                    <input type="checkbox" name="fever" value="fever" style="margin-bottom: 15px;"> <span>Fever</span><br/>
                </div>
            
                <!--------Submit Button--------->
                <input style="width: 265px;height: 40px;margin-top: 195px;margin-left: -460px;" class="btn btn-primary btn-md" type="submit" name="submit" value="Submit"><br/>
            
            </form>
            
        </div>
        
    
    </div><!--------content-------->
    
    <?php include_once("footer.php"); ?>

</body>
</html>