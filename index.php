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
<body style="background-color: grey">
		<div class="container">
   <form style="margin-top: 20px" align="center" method="post" action="index.php" enctype="mutipart/form-data">
	<input type="text" id="fight" name="name" placeholder ="name" required/>
	<input type="submit" name="submit" value="NEW HERO"/>
</form>
<form style="margin-top: 20px" method="post" action="index.php" enctype="mutipart/form-data">
	<input type="submit" name="submit2" value="FIGHT TO DEATH" />
</form>
<form style="margin-top: 20px " align="right" method="post" action="index.php" enctype="mutipart/form-data">
	<input type="submit" name="submit3" value="BECOME CHAMPION"/>
</form>
<form style="margin-top: 40px " align="center" method="post" action="index.php" enctype="mutipart/form-data">
	<input type="submit" name="submit4" value="DISPLAY SCORE"/>
</form>
</div>
<script src="fighter.js"></script>

</body>
<?php
include('dbcon.php');
include('insert.php');
include('update.php');
include('winner.php');
include('display.php');
?>
</html>