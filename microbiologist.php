
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Microbiologist</title>


<!--------Bootstrap CSS---------->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>

<body onLoad="initialize()">

	<!-------Carousel Slide and menu-bar--------->
	<?php include_once("header1.php"); ?>

	<!--------Heading----------------->
	<h1 style="text-align:center;">Microbiologist</h1><br/><br/>

        <!--------Doctor's Information DIV----------->
        <div class="doc-info" style="float:left;margin-top:-20px;margin-left:100px; width:480px; height:475px; border:2px solid black; border-radius:15px;">
            <form style="float:left" action="microbiologist.php" method="get">
                <strong style="float:left;margin-left: 31px;margin-top: 12px;font-size: 16px;">Search to see the doctor's information of your nearest location: </strong><br/><br/>
                <input placeholder="Search by place name" style="float:left; width:300px; height: 30px;border: 1px solid black;border-radius: 5px;margin-left: 31px;" type="search" name="k">
                <input name="search" class="btn btn-primary btn-md" type="submit" value="Search" style="margin-left: 5px;height: 31px; float:left;">
                
            </form>
            
            <!----------Overflow scroll DIV----------->
            <div style="height: 330px;width: 415px; float: left;margin-top: 38px;border: 1px solid black; border-radius:15px;
            margin-left: 31px; overflow-y:scroll; overflow-x:scroll;">
            	<?php include_once("microbiologistSearch.php"); ?>
            </div>
        </div>
        
        <?php include_once("footer.php"); ?>

</body>
</html>