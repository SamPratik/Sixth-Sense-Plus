<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Disease</title>
</head>

<body>

<?php include_once("header1.php"); ?>

	<form style="margin-top: -40px;margin-left: 180px;" action="diseaseSearch.php" method="get">
    	<input style="height: 30px;border: 1px solid black;border-radius: 5px; margin-left:650px;" type="search" name="k" class="col-lg-3 col-lg-offset-7" value="<?php echo $_GET["k"]; ?>">
        <input style=" margin-left:2px;" class="btn btn-primary btn-md" type="submit" value="Search">
    </form>

<?php
	$i=0;
	$k = $_GET["k"];
	$terms = explode(" ",$k);
	$query = "SELECT * FROM symptoms WHERE ";
	
	foreach ($terms as $each) {
		$i++;	
		
		if($i==1 && !empty($each)) {
			$query .="disease_name LIKE '%$each%' ";
		}
		
		if($i>1 && !empty($each)) {
			$query .="OR disease_name LIKE '%$each%' ";
		}
	}
	
	include_once("dbConnector.php");
	
	$result = mysqli_query($connection,$query);
	//$numRows = mysqli_num_rows($result);
	
	if($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			 //if($row["id"] == $id) {
				//echo $row["disease_id"]."<br/>";
?>

<div style="float:left;">
<?php
				echo "<strong>Disease Name: </strong>&nbsp;&nbsp;".$row["disease_name"]."<br/><br/>";
				echo "<strong>Description: </strong>&nbsp;&nbsp;<br/>".$row["description"]."<br/><br/>";
				echo "<strong>Symptoms: </strong>&nbsp;&nbsp;<br/>".$row["symptoms"]."<br/><br/>";	
				echo "<strong>Remedy: </strong>&nbsp;&nbsp;<br/>".$row["remedy"]."<br/><br/>";
				echo "<strong>Doctor Type:</strong><br/>";
				$link = $row["doc_type"];
				$title = $row["title"];
				echo "<a href='$link'>$title</a>";
			 //}
		}
	}
?>
</div>
	
<?php
	if(!$result) {
		echo "<br/>No Results found for <strong>$k</strong><br/>";	
	}
?>

<?php include_once("footer.php"); ?>

</body>
</html>