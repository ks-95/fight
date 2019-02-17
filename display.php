<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: center" class="container">

<?php
		if(isset($_POST['submit4']))
		{

			$sql="SELECT * FROM hero";
			$run=mysqli_query($con,$sql);
			$result=mysqli_query($con,$sql);

			if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
					echo "<br> id: ".$row["id"];
					echo "- Name: ".$row["name"];
					echo "-Win: ".$row["win"];

					echo "<br>";
				}
		}
	}
?>		
</div>
</body>
</html>