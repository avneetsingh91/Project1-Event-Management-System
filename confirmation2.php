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
<head>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		


    <style>
	.a:hover
	{
		color:#30C;
		text-decoration:none;
	}
	a
	{
		text-decoration:none;
	}
	.ii
	{
	margin:100px 200px 0px 0px;
	}
	.hoho
	{
	color:#330000;
    margin-left:400px;
	margin-top:0px;
	}
	</style>
		

	    <style type="text/css">
<!--
.style2 {color: #98ae5b}
-->
        </style>
</head>
	<body>
		<div id="outer">
			<div id="header">
				<div id="nav">
					<ul>
						<li class="first active">
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="#">contact us	</a>
						</li>
						
						<li class="last">
							<a href="home1.php">Register</a>
						</li>
						<li class="last">
							<a href="services.php">Services</a>
						</li>
					</ul>
					<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
			<br />	
	
	<tr>
  <td width="726" height="100%" bgcolor="#ffe8c1" class="body_txt">
<p><?php
  
 
 $y=$_POST['txtvname'];
  $g1=$_POST['select'];
  $g2=$_POST['add'];
  $g3=$_POST['phn'];
  $g4=$_POST['vemail'];
  $g5=$_POST['pwd'];
 
  
  $con=mysql_connect("localhost","root","");
  if(!$con)
  {
  	die("error is" .mysql_error());
	}
	else
	{
	mysql_select_db("project1",$con);
	$result=mysql_query("select * from vendor3 where vemail='$g4'");
	if($row=mysql_fetch_array($result))
	{
	echo "invalid email";
	echo "<a href=home.php>Back</a>";
	}
	else
	{
	mysql_query("insert into vendor3 values('$y','$g1','$g2','$g3','$g4','$g5')");
	mysql_close($con);
	echo"congratulations vendor your account has been created";
	echo 'your name is '.$y."<br>";
  echo 'your user id  is '.$g4."<br>";
  echo 'your password '.$g5."<br>";
 
?>
  
	 <form name="form4" method="post" action="vendor_welcome.php">
       <a href="services.php" >
            <input name="Next" type="submit"  id="Next" value="Surf the site">
            </a> </form>
<?php
	}
	
	}
	
  ?>
  </p>
  </td>
             <br class="clear" />
			</div>
			
		</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 <a href="home.html" class="a">HOME </a>|<a href="" class="a">CONTACT US </a>|<a href="" class="a">SERVICES</a>|<br />
             </div>
</body>
</html>