
<style>
	td {
		border: 1px solid black;
		height:50px;
	}
	
	th {
		border: 1px solid black;
		height:50px;
	}
</style>

<!-----Including Caraousel Silde-------->
<?php include_once("header1.php"); ?>

<h1 style="text-align:center;">Emergency</h1>


	<form style="margin-top: -40px;margin-left: 180px;" action="emergencySearch.php" method="get">
    	<input placeholder="Search by a place name" style="margin-bottom: 30px;height: 30px;border: 1px solid black;border-radius: 5px;" type="search" name="k" class="col-lg-3 col-lg-offset-7" value="<?php echo $_GET["k"]; ?>">
        <input name="search" class="btn btn-primary btn-md" style="float:left;margin-left: 5px;height: 31px;padding-top: 5px;" type="submit" value="Search">
    </form>

<?php
	$flag = 0;
		$i=0;
		$k = $_GET["k"];
		$terms = explode(" ",$k);
		$query = "SELECT * FROM emergency WHERE ";
		
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
?>

<table style="float:left;border:2px solid black; width:1062px; margin-left:88px;">
    <tr>
    	<th><center>Name of Hospital</center></th>
        <th><center>Adress & Contact</center></th>
    </tr>    
		<?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $link = $row["link"];
                    $hos_name = $row["hos_name"];
                    $address = $row["address"];
                    $contact = $row["contact"];
		?>
      
    <tr> 
    	<td> 
        <?php           
                    echo "<br/>Hospital Name:  <a href='$link'>".$hos_name."</a><br/>";
		?>
        </td>
        
        <td>
        <?php
                    echo "Address :  ".$address."<br/>";
                    echo "Contact:  ".$contact."<br/>";
		?>
        </td>
    </tr>
        
        <?php
								
                }//----while loop------
		?>
</table>
        <?php
        
            }
            
        ?>

<?php
		
		if(!$result) {
			echo "<br/>No Results found for <strong>$k</strong><br/>";	
		}

?>

<?php include_once("footer.php"); ?>
