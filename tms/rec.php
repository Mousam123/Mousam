<!DOCTYPE HTML>
<html>
<head>
<style>
@import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";
.rwd-table {
  margin: 1em 0;
  min-width: 300px;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: .5em;
}
.rwd-table td:last-child {
  padding-bottom: .5em;
}
.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 6.5em;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th, .rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child, .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child, .rwd-table td:last-child {
    padding-right: 0;
  }
}

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
}
.rwd-table tr {
  border-color: #46637f;
}
.rwd-table th, .rwd-table td {
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th, .rwd-table td:before {
  color: #dd5;
}
ul
{
	float: right;
	list-style-type: none;
	margin-top: 25px;
}
ul li
{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color:#000;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}
ul li a:hover{
	background-color: #00f;
	color: #000;
}
ul li.active a{
	background-color: #f00;
	color: #000;

}
.logo img{
	float:left;
	width:80px;
	height: auto;
}
.main{
	max-width: 1200px;
	margin: auto;
}
.title{
	position: absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}
.title h1{
	color: #000;
	font-size: 70px;
}
.button{
	position:absolute;
	top:70%;
	left:50%;
	transform:translate(-50%,-50%);

}
.btn{
	font-family: Arial;
	font-size: 40px;
	border: 3px solid #fff;
	padding: 12px,10px;
	color:#0f0;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color: #fff;
	color: #000;

}

</style>
</head>

	<h1>
		<title>BOOKINGs</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="cs1/js/jquery.min.js"></script>
		<script src="cs1/js/jquery.dropotron.min.js"></script>
		<script src="cs1/js/skel.min.js"></script>
		<script src="cs1/js/skel-layers.min.js"></script>
		<script src="cs1/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="cs1/css/skel.css" />
			<link rel="stylesheet" href="cs1/css/style.css" />
		</noscript>
	</h1>
	<body class="no-sidebar">
	<div class="main">
			<ul>
				<li  ><a href="index.html"> Home </a></li>
				<li><a href="package-list.php"> Tour Packages </a></li>
				<li><a href="about.html"> About </a></li>
				<li><a href="#"> Contact </a></li>
			</ul>
	</div>

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h2>YOUR BOOKING</h2>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
							<h3>BOOKINGS</h3>
							<span class="byline"></span>
<?php
	$conn = mysqli_connect("localhost","root","","tms");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql="CALL `flightin`();";
	$sql1="SELECT price from details1 where hotel_id=(SELECT max(hotel_id) from details1)";
	if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class=rwd-table>";
            echo "<tr>";
			 echo "<th>Source City</th>";
			 echo "<th>Destination City</th>";
			 echo "<th>Departure</th>";
			 echo "<th>Airline</th>";
			 echo "<th>No. of adults</th>";
			 echo "<th>Class</th>";
			 echo "<th>First Name</th>";
			 echo "<th>Last Name</th>";
			 echo "<th>Contact</th>";
			 echo "<th>e-mail</th>";
			 echo "<th>Payment Status</th>";
			echo "</tr>";
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
               echo "<td>" . $row['a'] . "</td>";
                echo "<td>" . $row['b'] . "</td>";
                echo "<td>" . $row['c'] . "</td>";
                echo "<td>" . $row['d'] . "</td>";
                echo "<td>" . $row['e'] . "</td>";
				echo "<td>" . $row['f'] . "</td>";
				echo "<td>" . $row['g'] . "</td>";
				echo "<td>" . $row['h'] . "</td>";
				echo "<td>" . $row['i'] . "</td>";
				echo "<td>" . $row['j'] . "</td>";
				echo "<td>" . $row['l'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	 mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

  mysqli_close($conn)
?>
<form action= "payment.html" method="post">
							<b>PAY NOW:</b>
							<input type="submit">
							</form>
					</header>
						</section>
				</div>
			</div>
	</body>
</html>

