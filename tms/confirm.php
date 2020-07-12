<?php
	$conn=mysqli_connect("localhost","root","","tms");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$source = $_POST['source'];
    $dest = $_POST['dest'];
    $date = $_POST['date'];
	$aline= $_POST['aline'];
	$adults= $_POST['adults'];
	$class= $_POST['class'];
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$contact= $_POST['contact'];
	$email= $_POST['email'];
	$status='NOT PAID';
	$sql="INSERT INTO flight (source,dest,date,aline,adults,class,fname,lname,contact,email,status) VALUES('$source','$dest','$date','$aline','$adults','$class','$fname','$lname','$contact','$email','$status')";
	
	
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ');
	}
	header("Location:rec.php")
?>