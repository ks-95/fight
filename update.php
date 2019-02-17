<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: center" class="container">
<?php
		

		if(isset($_POST['submit2'])){

		$sql="SELECT t.id FROM hero  AS t ORDER BY RAND() LIMIT 1";
		$res= mysqli_query($con,$sql);
		WHILE($row= mysqli_fetch_assoc($res)):
			$a= $row['id'];
			ENDWHILE;
			$sql="SELECT t.id FROM hero  AS t ORDER BY RAND() LIMIT 1";
		$res= mysqli_query($con,$sql);
		WHILE($ro= mysqli_fetch_assoc($res)):
			$b=$ro['id'];
			echo "GOOD FIGHT,COME ON!";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			ENDWHILE;
			$winid=rand(($a*$b)/$b,($a*$b)/$b,);

			echo "THIS FIGHT IS WON BY FIGHTER WITH ID:".$winid;

			$uquery="SELECT win FROM hero WHERE id='$winid'";
			$result=mysqli_query($con,$uquery);

			WHILE($rows= mysqli_fetch_assoc($result)):
			/**echo $rows['win'];*/
			
			$winsc= $rows['win'];
			$sq="UPDATE hero SET win='$winsc'+1 WHERE id= '$winid'";
			$resul=mysqli_query($con,$sq);
			ENDWHILE;

			
	}
?>
</div>
</body>
</html>