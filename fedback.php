<?php

session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />

<html>
<head>
<title>Feedback</title>
<style type="text/css">
.tab2
{
margin-left:300px;
}

.popo

{
margin-left:430px;

}
.style1 {color: #98ae5b}
.style2 {color: #000000}
</style>
</head>
<body>
<div id="outer">
			<div id="header">
				<div id="nav">
<ul>
			<li><a href="welcomeadmin.php">Home</a></li>
			<li><a href="adminservices.php">Services</a></li>
			<li><a href="viewuser.php">User</a></li>
			<li><a href="vieworders.php">Order</a></li>
			<li><a href="fedback.php">Feedback</a></li>
			</ul>									<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
<div id="main" style="height:400px; background:#306;">			
<?php
// Establishing connection to the database
$con = mysqli_connect("localhost", "root", "", "project1");

// Checking connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Query to fetch feedback data
$query = "SELECT * FROM feedback";
$result = mysqli_query($con, $query);

// Checking if query execution was successful
if (!$result) {
    die("Error in query: " . mysqli_error($con));
}

// Displaying feedback data in a table
echo "<table border='1' style='color:white' class='tab2' width='800'>";
echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Type</th><th>Comments</th></tr>";

// Looping through the fetched data and displaying it in rows
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['type']."</td><td>".$row['comments']."</td></tr>";
}

// Closing the table
echo "</table>";

// Freeing the result set
mysqli_free_result($result);

// Closing the connection
mysqli_close($con);
?>
</div>

</body>
</html>

</html>

