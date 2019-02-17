<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PIXLIE_FIGHT</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <script src="https://ajax.googleapis.com/ajaz/libs/angularjs/1.7.1/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
		<div class="container">

<form method="post" action="index.php" enctype="mutipart/form-data">
	<input type="text" id="fight" name="name" placeholder ="name" required/>
	<input type="submit" name="submit" value="NEW HERO"/>
</form>
<form method="post" action="index.php" enctype="mutipart/form-data">
	<input type="submit" name="submit2" value="FIGHT TO DEATH" />
</form>
<form method="post" action="index.php" enctype="mutipart/form-data">
	<input type="submit" name="submit3" value="BECOME CHAMPION"/>
</form>
</div>
<script src="fighter.js"></script>

</body>
<?php
		

		?>
<?php
	

	if(isset($_POST['submit']))
	{

		$con=mysqli_connect('localhost','root','','pix-fight');
	$name=$_POST['name'];
	$qry="INSERT INTO `hero`(`name`) VALUES ('$name')";

	$run=mysqli_query($con,$qry);
	if($run == true)
	{
		?>
		<script>
			alert('player created successfully');
		</script>
		<?php
	}
	}

	
?>

<?php
		

		if(isset($_POST['submit2'])){
$con=mysqli_connect('localhost','root','','pix-fight');
		$sql="SELECT * FROM hero";
		$res= mysqli_query($con,$sql);
		$datas= array();

		if(mysqli_num_rows($res)>2){
			while($row= mysqli_fetch_assoc($res)){
				$datas[]=$row;
			}
		}

		foreach ($datas as $data) {
			  $data['id'];
			}
		$a=rand(5,$data['id']);
		$b=rand($a,$data['id']);

		$winid=rand(($a*$b)/$b,($a*$b)/$b,);
		if(isset($_GET['submit2'])){
		$con=mysqli_connect('localhost','root','','pix-fight');
		if($winid==$a){
			$score=10;
		$sqlq="UPDATE hero SET win= (SELECT(win)+1) WHERE id='$winid'";
		$run=mysqli_query($con,$sqlq);
		$resul=mysqli_query($con,$sqlq);
		}


	}
}

		if(isset($_POST['submit3'])){
			$con=mysqli_connect('localhost','root','','pix-fight');
			$sqll="SELECT name,id FROM hero WHERE win=(SELECT MAX(win) FROM hero)";
		$run=mysqli_query($con,$sqll);
		$result=mysqli_query($con,$sqll);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "the winner is with the id : " .$row["id"];
			}
		}
	}	
		
?>
</html>