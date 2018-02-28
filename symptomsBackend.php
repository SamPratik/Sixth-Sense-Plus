<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Symptoms</title>
</head>

<body>

	<?php include_once("header1.php"); ?>
    
	<?php
	
		//----------Database Connection------------
		
		$connection = mysqli_connect("localhost", "root", "", "sixth_sens_plus1");
		
		$count = 0;
		$symptoms = array();
		$idArray = array();
	
		//if(isset($_POST["submit"])) {
			
			if(!isset($_POST["headache"])) {	
				$_POST["headache"] = "";
			}
			
			else {
				$checkbox = $_POST["headache"];
				$symptoms[] = $checkbox;	
			}
			
			if(!isset($_POST["vomiting"])) {
				$_POST["vomiting"] = "";	
			}
			
			else {
				$checkbox1 = $_POST["vomiting"];	
				$symptoms[] = $checkbox1;
			}
			
			if(!isset($_POST["confusion"])) {
				$_POST["confusion"] = "";	
			}
			
			else {
				$checkbox2 = $_POST["confusion"];	
				$symptoms[] = $checkbox2;
			}
			
			if(!isset($_POST["vision"])) {
				$_POST["vision"] = "";	
			}
			
			else {
				$checkbox3 = $_POST["vision"];	
				$symptoms[] = $checkbox3;
			}
			
			if(!isset($_POST["itchy"])) {
				$_POST["itchy"] = "";	
			}
			
			else {
				$checkbox4 = $_POST["itchy"];	
				$symptoms[] = $checkbox4;
			}
			
			if(!isset($_POST["pain"])) {
				$_POST["pain"] = "";	
			}
			
			else {
				$checkbox5 = $_POST["pain"];	
				$symptoms[] = $checkbox5;
			}
			
			if(!isset($_POST["skin"])) {
				$_POST["skin"] = "";	
			}
			
			else {
				$checkbox6 = $_POST["skin"];	
				$symptoms[] = $checkbox6;
			}
			
			if(!isset($_POST["nose"])) {
				$_POST["nose"] = "";	
			}
			
			else {
				$checkbox7 = $_POST["nose"];	
				$symptoms[] = $checkbox7;
			}
			
			if(!isset($_POST["breath"])) {
				$_POST["breath"] = "";	
			}
			
			else {
				$checkbox8 = $_POST["breath"];	
				$symptoms[] = $checkbox8;
			}
			
			if(!isset($_POST["language"])) {
				$_POST["language"] = "";	
			}
			
			else {
				$checkbox9 = $_POST["language"];	
				$symptoms[] = $checkbox9;
			}
			
			if(!isset($_POST["listen"])) {
				$_POST["listen"] = "";	
			}
			
			else {
				$checkbox10 = $_POST["listen"];	
				$symptoms[] = $checkbox10;
			}
			
			if(!isset($_POST["directions"])) {
				$_POST["directions"] = "";	
			}
			
			else {
				$checkbox11 = $_POST["directions"];	
				$symptoms[] = $checkbox11;
			}
			
			if(!isset($_POST["bleeding"])) {
				$_POST["bleeding"] = "";	
			}
			
			else {
				$checkbox12 = $_POST["bleeding"];	
				$symptoms[] = $checkbox12;
			}
			
			if(!isset($_POST["sensitive"])) {
				$_POST["sensitive"] = "";	
			}
			
			else {
				$checkbox13 = $_POST["sensitive"];	
				$symptoms[] = $checkbox13;
			}
			
			if(!isset($_POST["Loose"])) {
				$_POST["Loose"] = "";	
			}
			
			else {
				$checkbox14 = $_POST["Loose"];	
				$symptoms[] = $checkbox14;
			}
			
			if(!isset($_POST["Insomnia"])) {
				$_POST["Insomnia"] = "";	
			}
			
			else {
				$checkbox15 = $_POST["Insomnia"];	
				$symptoms[] = $checkbox15;
			}
			
			if(!isset($_POST["suicide"])) {
				$_POST["suicide"] = "";	
			}
			
			else {
				$checkbox16 = $_POST["suicide"];	
				$symptoms[] = $checkbox16;
			}
			
			if(!isset($_POST["weight"])) {
				$_POST["weight"] = "";	
			}
			
			else {
				$checkbox17 = $_POST["weight"];	
				$symptoms[] = $checkbox17;
			}
			
			if(!isset($_POST["mood"])) {
				$_POST["mood"] = "";	
			}
			
			else {
				$checkbox18 = $_POST["mood"];	
				$symptoms[] = $checkbox18;
			}
			
			if(!isset($_POST["cough"])) {
				$_POST["cough"] = "";	
			}
			
			else {
				$checkbox18 = $_POST["cough"];	
				$symptoms[] = $checkbox18;
			}
			
			if(!isset($_POST["fever"])) {
				$_POST["fever"] = "";	
			}
			
			else {
				$checkbox18 = $_POST["fever"];	
				$symptoms[] = $checkbox18;
			}
			
			$flag = 0;
			$query = "SELECT disease_id FROM symptoms";
			$result = mysqli_query($connection,$query);
		?>
        
		
		<div class="all-disease-info" style="float:left; min-height:300px; margin-left:90px;">
        
			<?php
                
                while($row = mysqli_fetch_assoc($result)) {
                    //echo $row["id"]."<br/>";	
                    $id = $row["disease_id"];
                    $match = 0;
                    $query1 = "SELECT keywords FROM symptoms WHERE disease_id=$id";
                    $result1 = mysqli_query($connection,$query1);
                    $row = mysqli_fetch_assoc($result1);
                    
                    $kTerms = explode(" ",$row["keywords"]);
                    
                    /*echo "<pre>";
                    print_r($symptoms);
                    //break;
                    echo "</pre>";*/
                    $count = 0;
                    foreach($symptoms as $s) {
                        foreach ($kTerms as $k) {
                            if($s == $k) {
                                $match++;
                                break;	
                            }  //-----if condintion fro MATCH increasement-----
                            
                        } //-----kTerms loop--------
                        $count++;
                        
                    } //-----symptoms loop----
                    
                    $i=0;
                    
                    if($match >= 1) {
                        
                        $percentage = $match/$count*100;
                        $idArray[] = $id;
						
                        $insertPercentage = "UPDATE symptoms SET percentage={$percentage} WHERE disease_id={$id}";
						mysqli_query($connection,$insertPercentage);
						
					}//-------if($match >= 1)------
					
				}//------id loop--------
				
		//} -----if(isset($_POST["submit"]))------
            ?>
            
            <?php
				$i=0;
				$queryGetDetails = "SELECT * FROM symptoms WHERE ";
				foreach($idArray as $id) {
					if($i == 0) {
						$queryGetDetails .="disease_id = $id";
						$i++;
					}
					
					if($i > 0) {
						$queryGetDetails .=" OR disease_id=$id";
					}
				}//-----foreach($idArray as $id)----------
			?>
            
            <?php $queryGetDetails .=" ORDER BY percentage DESC"; ?>
            
            <?php
				$resultGetDetails = mysqli_query($connection,$queryGetDetails);
				while($row = mysqli_fetch_assoc($resultGetDetails)) {
					$id = $row["disease_id"];
			?>
            
            <div class="matched-disease-info" style="float:left; width:1047px;">
                    
                <!-----Matched Diseases Print------->
                <div class="disease-name-button" style="float:left; width:930px; margin-bottom:12px; border-bottom: 1px solid grey;">
                    <strong <?php if($row["percentage"] >= 70) { ?> style="color:#B80000 ;" <?php } ?> >
                        <?php echo round($row["percentage"],2)."% Symptoms has been matched to ".$row["disease_name"]; ?>
                    </strong>
                    <!--------Button to Slide Toggle---------->
                    <button class="btn btn-primary btn-md pull-right" id="diseaseName<?php echo $id; ?>">Details
                    </button><br/>
                </div><!-----disease-name-button-------><br/>
                
                <!---------jQuery To Slide Toggle the div-------->
                <script>
                    $("#diseaseName<?php echo $id; ?>").click(function(){
                        $("#diseaseDetails<?php echo $id; ?>").slideToggle("slow");
                    });
                </script>
                
                <!-----After Clicking the Button disease details will appear--------->
                <div style="float:left; display:none;" id="diseaseDetails<?php echo $id; ?>">
                    <strong>Disease Name: </strong>&nbsp;&nbsp;<?php  echo $row["disease_name"]; ?><br/><br/>
                    <strong>Description: </strong>&nbsp;&nbsp;<br/><?php echo $row["description"];  ?><br/><br/>
                    <strong>Symptoms: </strong>&nbsp;&nbsp;<br/><?php echo $row["symptoms"]; ?><br/><br/>
                    <strong>Remedy: </strong>&nbsp;&nbsp;<br/><?php echo $row["remedy"] ?><br/><br/>
                    <strong>Doctor Type:</strong><br/>
                    <?php 
                        $link = $row["doc_type"];
                        $title = $row["title"];
                    ?>
                    <a href="<?php echo $link; ?>" ><?php echo $title; ?></a>
                    <hr>
                </div>
                
            </div><!---------matched-disease-info DIV-------->
            
            <?php
				}
			?>
            
           
        
     </div>
<?php include_once("footer.php"); ?>
</body>
</html>