
<?php
	$flag = 0;
	if(isset($_GET["search"])) {
		$i=0;
		$k = $_GET["k"];
		$terms = explode(" ",$k);
		$query = "SELECT * FROM dentist WHERE ";
		
		foreach ($terms as $each) {
			$i++;	
			
			if($i==1 && !empty($each)) {
				$query .="keywords LIKE '%$each%' ";
			}
			
			if($i>1 && !empty($each)) {
				$query .="OR keywords LIKE '%$each%' ";
			}
		}
		
		include_once("dbConnector.php");
		
		$result = mysqli_query($connection,$query);
		//$numRows = mysqli_num_rows($result);
		
		if($result) {
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row["id"];
				$doc_name = $row["doc_name"];
				$designation = $row["designation"];
				$organization = $row["organization"];
				$chamber = $row["chamber"];
				$location = $row["location"];
				$phone = $row["phone"];
				$keywords = $row["keywords"];
         
        //echo "<div style='height: 330px;width: 415px; float: left;margin-top: 38px;border: 1px solid black; border-radius:15px;margin-left: 31px; overflow-y:auto;'>";        
				
				echo "<br/>Doctor's Name:  ".$doc_name."<br/>";
				echo "Designation :  ".$designation."<br/>";
				echo "Organization:  ".$organization."<br/>";
				echo "chamber:  ".$chamber."<br/>";
				echo "location:  ".$location."<br/>";
				echo "phone:  ".$phone."<br/>";
		//echo "</div>";				
			}//----while loop------

		}
		
		if(!$result) {
			echo "<br/>No Results found for <strong>$k</strong><br/>";	
		}
	}
	
	else {
		$_GET["k"] = "";	
	}
?>
