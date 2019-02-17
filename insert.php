<?php
	

	if(isset($_POST['submit']))
	{

	
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