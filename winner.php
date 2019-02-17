<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: center" class="container">
<?php


		if(isset($_POST['submit3'])){
			$sqll="SELECT name,id FROM hero WHERE win=(SELECT MAX(win) FROM hero)";
				$run=mysqli_query($con,$sqll);
				$result=mysqli_query($con,$sqll);
				if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
				echo "THE WINNER IS PALYER WITH ID: " .$row["id"];
			}
		}
	}	
		
?>
</div>
</body>
</html>