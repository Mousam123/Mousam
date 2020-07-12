<?php
	$conn = mysqli_connect("localhost","root","","tms");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	else
	{
		echo "Response submitted";
		sleep(3);
		header("Location: index.php");
	}
	mysqli_close($conn);
?>